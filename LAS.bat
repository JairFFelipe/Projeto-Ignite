@echo off
setlocal enabledelayedexpansion
title LAS Corrigido
cd /d "%~dp0"

:: Verifica admin
net session >nul 2>&1
if %errorlevel% neq 0 (
    echo [ERRO] Execute este script como Administrador.
    pause
    exit /b
)

:: Pastas
set "BASE_DIR=%~dp0"
set "REQ_DIR=%BASE_DIR%req"
set "PHP_DIR=%BASE_DIR%php"
set "NODE_DIR=%BASE_DIR%node"

echo ====== Etapa 1: Criando pastas ======
mkdir "%PHP_DIR%" >nul 2>&1
mkdir "%NODE_DIR%" >nul 2>&1

echo ====== Etapa 2: Instalando VC Redistributable ======
"%REQ_DIR%/vc_redist.x64.exe" /quiet /norestart

echo ====== Etapa 3: Extraindo PHP e Node ======
tar -xf "%REQ_DIR%/php.zip" -C "%PHP_DIR%" || (echo [ERRO] Extracao PHP falhou && pause && exit /b)
tar -xf "%REQ_DIR%/node.zip" -C "%NODE_DIR%" || (echo [ERRO] Extracao Node falhou && pause && exit /b)

set "PHP_PATH=%PHP_DIR%"
set "NODE_PATH=%NODE_DIR%"

echo ====== Etapa 4: Configurando PATH ======
for /f "tokens=2*" %%A in ('reg query "HKLM\SYSTEM\CurrentControlSet\Control\Session Manager\Environment" /v Path') do set "OLD_PATH=%%B"
<<<<<<< HEAD

=======
reg add "HKLM\SYSTEM\CurrentControlSet\Control\Session Manager\Environment" /v Path /t REG_EXPAND_SZ /d "%PHP_PATH%;%NODE_PATH%;%OLD_PATH%" /f
>>>>>>> a0722b6 (por algum motivo um dos controllers foi obliterado da existencia, coloquei de volta)

echo ====== Etapa 5: Instalando Composer ======
"%REQ_DIR%/composer-setup.exe" /quiet || (echo [ERRO] Instalação Composer falhou && pause && exit /b)
set "COMPOSER_EXE=C:\ProgramData\ComposerSetup\bin\composer.bat"

<<<<<<< HEAD

=======
if not exist "%COMPOSER_EXE%" (
    echo [ERRO] Composer nao encontrado em "%COMPOSER_EXE%"
    pause
    exit /b
)

echo ====== Etapa 6: Copiando .env ======
copy "%BASE_DIR%/.env.example" "%BASE_DIR%/.env" /Y || (echo [ERRO] Falha ao copiar .env && pause && exit /b)

cd /d "%BASE_DIR%"

echo ====== Etapa 7: Gerando chave Laravel ======
call "%PHP_PATH%/php.exe" artisan key:generate || (echo [ERRO] Falha ao gerar chave Laravel && pause && exit /b)
>>>>>>> a0722b6 (por algum motivo um dos controllers foi obliterado da existencia, coloquei de volta)


echo ====== Etapa 8: Composer Update ======
call "%COMPOSER_EXE%" update || (echo [ERRO] Composer Update falhou && pause && exit /b)


echo ====== Etapa 9: Instalando dependencias NPM ======
set PATH=%NODE_PATH%;%PATH%
call "%NODE_PATH%/npm.cmd" install || (echo [ERRO] NPM Install falhou && pause && exit /b)
call "%NODE_PATH%/npm.cmd" run build || (echo [ERRO] NPM Build falhou && pause && exit /b)

<<<<<<< HEAD
echo.

REM Atualiza o PATH (mantendo o anterior)
set "NEW_PATH=%PHP_PATH%;%NODE_PATH%;%OLD_PATH%"
reg add "HKLM\SYSTEM\CurrentControlSet\Control\Session Manager\Environment" /v Path /t REG_EXPAND_SZ /d "%NEW_PATH%" /f || (echo [ERRO] Falha ao atualizar PATH && pause && exit /b)

echo.

echo ====== Etapa 7: Configurando Laravel ======
copy ".env.example" ".env" /Y || (echo [ERRO] Falha ao copiar .env && pause && exit /b)
call %PHP_PATH%\php.exe artisan key:generate || (echo [ERRO] Falha ao gerar chave Laravel && pause && exit /b)

echo.
echo ====== Concluído! ======
=======
echo ====== CONCLUIDO ======
>>>>>>> a0722b6 (por algum motivo um dos controllers foi obliterado da existencia, coloquei de volta)
pause