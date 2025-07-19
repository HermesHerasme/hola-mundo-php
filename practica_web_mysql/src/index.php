cat > docker-compose.yml <<'EOF'
version: '3.8'

services:
  php:
    build: .
    ports:
      - "8080:80"
    volumes:
      - ./src:/var/www/html
    depends_on:
      - db

  db:
    image: mysql:8.0
    environment:
      MYSQL_ROOT_PASSWORD: 12345
      MYSQL_DATABASE: testdb
    ports:
      - "3306:3306"
EOF