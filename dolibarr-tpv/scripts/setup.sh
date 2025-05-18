#!/bin/bash

echo "📦 Arrancando entorno Dolibarr con Docker..."
docker-compose up -d

echo "⏳ Espera unos segundos mientras se inician los contenedores..."
sleep 10

echo "✅ Accede a Dolibarr en http://localhost:8080"
echo "⚠️ Si accedes desde otro equipo, usa la IP de tu servidor en lugar de localhost"
echo
echo "👉 IMPORTANTE:"
echo "- Selecciona 'MySQL' y pon como host: mariadb"
echo "- Usuario: dolibarr"
echo "- Contraseña: dolipass"
echo "- Base de datos: dolibarr"
echo "- Puerto: 3306 (por defecto)"
