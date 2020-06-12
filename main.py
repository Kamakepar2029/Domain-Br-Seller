from flask import Flask, request, render_template, redirect, url_for
from flask_mail import Mail, Message

# configuration
DEBUG = True




# instantiate the app
app = Flask(__name__, template_folder="templates")
app.config.from_object(__name__)
app.config['MAIL_SERVER'] = 'smtp.mail.ru'
app.config['MAIL_PORT'] = 587
app.config['MAIL_USE_TLS'] = True
app.config['MAIL_USERNAME'] = 'kamakepar@mail.ru'
app.config['MAIL_DEFAULT_SENDER'] = 'kamakepar@mail.ru'
app.config['MAIL_PASSWORD'] = 'kirik1028'
mail = Mail(app)

# sanity check route
@app.route('/')
def index():
    return render_template('index.html')


@app.route('/domain')
def domain():
    return render_template('domain.html')


@app.route('/dnscheck')
def dns():
    return render_template('dns.html')


@app.route('/check', methods=['POST', 'GET'])
def check():
    if request.method == 'POST':
        if (request.form['inf'] != ''):
          inf = request.form['inf']
          messagebod = '<h2>Site is informative: ' + inf + '</h2>\n'
          about = request.form['about']
          messagebod = messagebod + '<H2>About site points: ' + about + '</H2>\n'
          products = request.form['products']
          messagebod = messagebod + '<h2>Products: ' + products + '</h2>\n'
          anything = request.form['anything']
          messagebod = messagebod + '<h2>Anything else: ' + anything + '</h2>\n'
          email = request.form['email']
          messagebod = messagebod + '<H2>Customer Email: ' + email + '</H2>\n<br>'
          data = {"message": "Hello Man", "script": messagebod}
          sop = 'Enquire from webpage from ' + email
          msg = Message(sop, recipients=["ptiza2028@gmail.com"])
          msg.html = messagebod
          mail.send(msg)
          return render_template('check.html')
        else:
            return render_template('error.html')

    return render_template('error.html')


if __name__ == '__main__':
    app.run(host='0.0.0.0', port=1024)
