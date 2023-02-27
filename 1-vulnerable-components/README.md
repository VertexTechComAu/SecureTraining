#Ubuntu Setup
sudo apt install python3-venv

cd code

pip install -r requirements.txt

python3 -m venv venv

source venv/bin/activate

pip install Flask

python -m flask --version

export FLASK_APP=marketplace

flask run

#Go to the browser and visit “http://127.0.0.1:5000”