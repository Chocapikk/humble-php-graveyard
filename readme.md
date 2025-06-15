# Humble Php Graveyard

- This repository holds many bad code patterns for demo & training purpose 📖
- Use it for free, just send kudos & keep the ref/source 🙏

## How To Use

```bash
# Start the server
sudo docker run --rm -it -v ./src:/src -w /src --net=host --name php-graveyard php:8.1 php -S 127.0.0.1:8000
# Make yourself confy with a shell
sudo docker exec -it php-graveyard bash -il
# Setup a TCP listener for OutOfBounds vulns & tests
nc -lnvp 8001
while true; do timeout 1 nc -lnvp 8001; done 
```

## Samples

```

curl -gki "http://localhost:8000/20_toctou.php?url=http://127.0.0.1:8001/resource"

```