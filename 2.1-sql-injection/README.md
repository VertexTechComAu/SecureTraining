#Ubuntu Setup

#Install PostGres

sudo apt-get install postgresql 

#Create your used on postgres
sudo -u postgres -i 

createuser $USER

exit

#FlaskApp

cd code

python3 -m venv venv

source venv/bin/activate

pip install flask
 
pip install psycopg2

pip install pytest

python -m flask init-db

#RUN TEST

pytest --tb=short