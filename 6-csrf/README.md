#Ubuntu Setup
cd code

pip install flask flask_sqlalchemy flask_migrate psycopg2-binary bcrypt

#incase of error remove migrations folder, then drop table alembic_version from postgres, thenflask db init, flask db migrate, flask db upgrade. 

flask db migrate

flask db upgrade

flask run #or python -m flask run
