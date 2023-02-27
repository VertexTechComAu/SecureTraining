#Ubuntu setup

python3 -m venv venv

source venv/bin/activate

pip install flask flask_sqlalchemy flask_migrate psycopg2-binary bcrypt

export FLASK_APP=marketplace


flask db upgrade

flask run