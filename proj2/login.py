from flask import Flask, render_template, request, redirect, session

app = Flask(__name__)
app.secret_key = 'my_secret_key'

@app.route('/')
def index():
    if 'username' in session:
        return render_template(($mysqli=new mysqli("localhost,"2242411","u07147","db2242411");', username=session['username'])
    else:
        return redirect('/login')

@app.route('/login', methods=['GET', 'POST'])
def login():
    if request.method == 'POST':
        # username and password from the form data
        username = request.form['Login ID']
        password = request.form['Password']

        #  username and password against a database of authorized users
        if username == 'Admin' and password == 'Admin ':
            # If the username and password are valid, set the session variables and redirect to the homepage
            session['username'] = username
            return redirect('elder care.html')
        else:
            # If the username and password are not valid
            return render_template('login.html', error='Invalid username or password')

    return render_template('login.html')
