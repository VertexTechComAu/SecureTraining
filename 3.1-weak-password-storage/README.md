#Ubuntu Setup

cd 3.1

cd code

python3 -m venv venv

source venv/bin/activate

pip install -r requirements.txt

Visit: http://127.0.0.1:5000/user/login

#Testing
Download worklist from: https://github.com/brannondorsey/naive-hashcat/releases/download/data/rockyou.txt

cd ~/3.2-weak-password-storage/test/crackers

time python crackpass.py f75778f7425be4db0369d09af37a6c2b9a83dea0e53e7bd57412e4b060e607f7 rockyou.txt

