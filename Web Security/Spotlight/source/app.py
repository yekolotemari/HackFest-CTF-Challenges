
import re
import os
from flask import Flask, render_template, render_template_string, request

app = Flask(__name__)
app.secret_key = os.urandom(16).hex()

def exploit_filter(exploit):
    message = ""
    blacklist = ["#" "_","config", "items"]
    print(exploit)
    for i in blacklist:
        if i in exploit:
            message = f"Found >>{i}<< filtering => " 
            return message, re.sub('\W+','', exploit)
            # break
            
    return message, exploit.replace("_", " ")

@app.route("/", methods=["POST", "GET"])
def index():
    if request.method == "GET":
        rendered_template = render_template("index.html", exploit=None, message=None)
        return render_template_string(rendered_template), 200

    else:
        exploit = request.form['exploit']
        message, exploit = exploit_filter(exploit)
        result = [message, exploit]
        # try:
        if message == "":
            return render_template_string(render_template("index.html", result=result)), 200
        else:
            return render_template_string(render_template("index.html", result=result )), 200
        
            
@app.route("/robots.txt", methods=["GET"])
def robo():
    return render_template_string(render_template("robots.txt")), 200

@app.route("/requirements.txt", methods=["GET"])
def require():
    return render_template_string(render_template("requirements.txt")), 200


if __name__ == "__main__":
    app.run(debug=True, port=9000, host='0.0.0.0')
