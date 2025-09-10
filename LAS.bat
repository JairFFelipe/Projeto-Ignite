@echo off
title LAS
setlocal enabledelayedexpansion
cd /d "%~dp0"

:: Verifica se está rodando como administrador
net session >nul 2>&1
if %errorlevel% neq 0 (
    echo [ERRO] Este script precisa ser executado como Administrador.
    pause
    exit /b
)

:: Define pasta base
set "BASE_DIR=%~dp0"
set "REQ_DIR=%BASE_DIR%req"

echo.
echo ====== Etapa 1: Criando pastas de destino ======
mkdir "%BASE_DIR%php" 	1
mkdir "%BASE_DIR%node" >nul 2>&1

echo.
echo ====== Etapa 2: Instalando Visual C++ Redistributable ======
"%REQ_DIR%\vc_redist.x64.exe" /quiet /norestart 
::  (echo [ERRO] Falha na instalação do VC Redist && pause && exit /b)

echo.
echo ====== Etapa 3: Extraindo PHP e Node ======
tar -xf "%REQ_DIR%\php.zip" || (echo [ERRO] Falha ao extrair PHP && pause && exit /b)
tar -xf "%REQ_DIR%\node.zip" || (echo [ERRO] Falha ao extrair Node && pause && exit /b)

echo.
echo ====== Etapa 4: Configurando PATH Global ======
set "PHP_PATH=%BASE_DIR%php"
set "NODE_PATH=%BASE_DIR%node"

REM Lê o PATH atual
for /f "tokens=2*" %%A in ('reg query "HKLM\SYSTEM\CurrentControlSet\Control\Session Manager\Environment" /v Path') do set "OLD_PATH=%%B"

REM Atualiza o PATH (mantendo o anterior)
set "NEW_PATH=%PHP_PATH%;%NODE_PATH%;%OLD_PATH%"
reg add "HKLM\SYSTEM\CurrentControlSet\Control\Session Manager\Environment" /v Path /t REG_EXPAND_SZ /d "%NEW_PATH%" /f || (echo [ERRO] Falha ao atualizar PATH && pause && exit /b)

echo.
echo ====== Etapa 5: Instalando Composer ======
"%REQ_DIR%\composer-setup.exe" /quiet || (echo [ERRO] Falha na instalação do Composer && pause && exit /b)
set "COMPOSER_PATH=C:\ProgramData\ComposerSetup\bin\composer.bat"

echo.
echo ====== Etapa 6: Instalando dependências ======
call %PHP_PATH%\php.exe C:\ProgramData\ComposerSetup\bin\composer.phar install || (echo [ERRO] Composer Install falhou && pause && exit /b)

:: Temporarily set the PATH for the current session
set PATH=%NODE_PATH%;%PATH%
call npm.cmd install || (echo [ERRO] NPM Install falhou && pause && exit /b)
call npm.cmd run build || (echo [ERRO] NPM Build falhou && pause && exit /b)

echo.
echo ====== Etapa 7: Configurando Laravel ======
copy ".env.example" ".env" /Y || (echo [ERRO] Falha ao copiar .env && pause && exit /b)
call %PHP_PATH%\php.exe artisan key:generate || (echo [ERRO] Falha ao gerar chave Laravel && pause && exit /b)

echo.
echo ====== Concluído! ======
pause