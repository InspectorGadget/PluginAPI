<!DOCTYPE html>
<!--
Copyright (C) 2017 RTG
This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.
You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> API </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script src="jquery.min.js"></script>
        <style>
          
        table th {
          text-align: center;
        }

        tr td {
          text-align: center;
        }

        form input {
          text-align: center;
          font-family: italic;
          border: 2px solid black;
        }

        </style>
    </head>
    <body>
        
        <nav class="navbar navbar-default">
            
            <div class="container-fluid">
                
                <div class="navbar-header">
                    
                    <a class="navbar-brand" href="#"> API </a>
                    
                </div>
                
                <ul class="nav navbar-nav navbar-left">
                   
                    <li> <a href="../"> Home </a> </li>

                </ul>
                
            </div>
            
        </nav>
        
    <center>

    <h3> Please Sign up! </h3>

    <br><br>

      <form method="POST" action="signup.php">
        
        <input type="text" name="username" placeholder="Enter your Username"><br><br>
        <input type="password" name="password" placeholder="Enter your Password"><br><br>
        <button type="submit">
          Register
        </button>

        <br><br>
        <strong> Have an account? <a href="../"> Login </a> here</strong>

      </form>

    </center>
        
    </body>
</html>