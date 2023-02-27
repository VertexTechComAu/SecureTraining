#Ubuntu Setup 

sudo apt install python3-venv

source venv/bin/activate

pip install Flask

python -m flask --version

export FLASK_APP=marketplace


pip install flask_sqlalchemy

pip install flask_migrate

pip install psycopg2-binary

pip install bcrypt

#or use pip install -r requirements.txt

flask run


