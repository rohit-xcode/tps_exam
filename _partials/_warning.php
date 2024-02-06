<div id='card' class='animated fadeIn'>
            <div id='upper-side'>
              
             <i class='fa fa-times'></i>
                <h3 id='status'>
                Time's up!
              </h3>
            </div>
            <div id='lower-side'>
              <p id='message'>
              Time's up! Please submit the test...
              </p>
              <a href='#' id='contBtn' onclick='hide()'>Okay</a>
            </div>
          </div>
          <style>
              #card {
            position: fixed;
            width: 320px;
            display: none;
            margin: 40px auto;
            text-align: center;
            font-family: 'Source Sans Pro', sans-serif;
            z-index: 99999;
            top: 20%;
            left: 0;
            right: 0;
            bottom: 0;
          }
          #upper-side {
            padding: 2em;
            background-color: orangered;
            display: block;
            color: #fff;
            border-top-right-radius: 8px;
            border-top-left-radius: 8px;
          }
          #checkmark {
            font-weight: lighter;
            fill: #fff;
            margin: -3.5em auto auto 20px;
          }#status {
            font-weight: lighter;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 1em;
            margin-top: -.2em;
            margin-bottom: 0;
          }#lower-side {
            padding: 2em 2em 5em 2em;
            background: #fff;
            display: block;
            border-bottom-right-radius: 8px;
            border-bottom-left-radius: 8px;
          } #message {
            margin-top: -.5em;
            color: orangered;
            letter-spacing: 1px;
          }#contBtn {
            position: relative;
            top: 1.5em;
            text-decoration: none;
            background: orangered;
            color: #fff;
            margin: auto;
            padding: .8em 3em;
            -webkit-box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.21);
            -moz-box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.21);
            box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.21);
            border-radius: 25px;
            -webkit-transition: all .4s ease;
                  -moz-transition: all .4s ease;
                  -o-transition: all .4s ease;
                  transition: all .4s ease;
          }
          #contBtn:hover {
            -webkit-box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.41);
            -moz-box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.41);
            box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.41);
            -webkit-transition: all .4s ease;
                  -moz-transition: all .4s ease;
                  -o-transition: all .4s ease;
                  transition: all .4s ease;
          }
          </style>
          <script>
              function hide(){
                 document.getElementById('card').style.display='none';
              }
          </script>