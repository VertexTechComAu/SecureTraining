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

flask run

#Delete postgres (drop database marketplace) database and create again (create database marketplace) in case there is an error. 

#Head to http://127.0.0.1:5000/user/login

