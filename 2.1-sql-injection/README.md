#Ubuntu Setup

python3 -m venv venv

source venv/bin/activate

pip install Flask

python -m flask --version

export FLASK_APP=marketplace

pip install psycopg2-binary

python -m flask init-db

pip install pytest

RUN TEST

pytest --tb=short