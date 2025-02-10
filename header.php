
<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Live chat</title>
  <link rel="stylesheet" href="style5.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  <style>
  body{
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  background: linear-gradient(-45deg, #ee7752, mistyrose, lightpink, tomato);
  background-size: 400% 400%;
  animation: gradient 5s ease infinite;
  padding: 0 10px;
}
@keyframes gradient {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}
  .users header .logout{
  display: block;
  background-color: tomato;
  color: #fff;
  outline: none;
  border: none;
  padding: 7px 15px;
  text-decoration: none;
  border-radius: 5px;
  font-size: 17px;
}
.outgoing .details p{
  background: deepskyblue;
  color: #fff;
  border-radius: 18px 18px 0 18px;
}
.incoming .details p{
  background: mintcream;
  color: #333;
  border-radius: 18px 18px 18px 0;
}
.typing-area button{
  color: #fff;
  width: 55px;
  border: none;
  outline: none;
  background-color: black;
  font-size: 19px;
  cursor: pointer;
  opacity: 0.7;
  pointer-events: none;
  border-radius: 0 5px 5px 0;
  transition: all 0.3s ease;
}

</style> 
</head>