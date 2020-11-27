# BiceVidaTest
Test de Ingeniero DevOps - Bice Vida Lab - Opción 1

1. Para realizar el proyecto se creó primero una BD en Firebase de google (https://console.firebase.google.com/), aquí se creo un proyecto, se creó una BD de Desarrollo en Realtime Database, en modo prueba y pública (https://api-bicevida-test.firebaseio.com/). Se subió un archivo del tipo .JSON (biceapi.json), a traves de la opción "Importar JSON", para consumir o extraer de aquí los datos desde la apliación a construir.

2. Para el desarrollo de la aplicación se utilizó Visual Studio Code.

3. Para el mantenimiento de las versiones de los archivos (.php, .yaml), se utilizó GIT y GITHUB, las actualizaciones se realizaron con Git Bash, mediante comandos para inicializar el repositorio, agregar archivos y luego subirlos al repositorio de GITHUB ("git init","git remote add origin https://github.com/alexjvl/BiceVidaTest.git", "git add -A", "git commit -m "comentarios"", "git push origin master").

4. Para las pruebas, implementación y publicación de la aplicación, se utilizó Google App Engine de GCP, para esto se creo un proyecto, y se uso la herramienta de línea de comandos Cloud Shell de GCP.

5. Para las pruebas de la aplicación en App Engine, se utilizó el comando "php -S localhost:8080" en Cloud Shell, para luego Obtener una vista previa de la app con “Vista previa en la Web”, opción proporcionada por Cloud Shell.

6. Para subir los archivos a App Engine
