#Ubuntu Setup
sudo apt install python3-venv

cd code

python3 -m venv venv

source venv/bin/activate

pip install -r requirements.txt

python -m flask --version

export FLASK_APP=marketplace

python -m flask run

#Go to the browser and visit “http://127.0.0.1:5000”

#Testing

pip install safety

safety check -r requirements.txt --full-report

#Fix

Change package version on requirements files 

pip install -r requirements.txt --upgrade
