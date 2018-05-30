


# Documentation  


1. Eventor. 

2. DJ-takeover. 


## Eventor

The Eventor project on Github is divided into 2 branches:

* Master branch. 

* Mockup branch. 

### Master. 


The Master branch contains all the Backend functionality of the app.  


### Mockup. 

Even though the Mockup was derived from the Master branch, Mockup remains the most complete branch. The Eventor project is currently running on the Mockup branch: [dev-eventor.herokuapp.com](https://dev-eventor.herokuapp.com)  


NB: You can switch to the Mockup branch using `git checkout Mockup` 


** Language **

* Backend: PHP. 

* Frontend: HTML, CSS(Bootstrap framework), Javascript. 


## DJ-takeover.


The DJ-takeover codebase resides in the Mockup branch. 


**File structure:**

The project folder is in the  `fritzColor` folder.


**Screens** 


There are currently two screens for this project:

* Input page (commonly known as the camera page). 

* Output page. 

## Input page. 

The code that makes the input page work is inside this directory: `/fritzColor/examples/server.php`    
  
There is a testing page as well for the input page: `/fritzColor/examples/color_camera.html`

The hosted url is at [Camera page](https://dev-eventor.herokuapp.com/fritzColor/examples/server.php)  

## Output page.

The code for the output page is in this directory `/fritzColor/examples/receiver.php ` 

The hosted url is at [Output page](https://dev-eventor.herokuapp.com/fritzColor/examples/receiver.php)  


## How the project works. 

The camera page is based on Trackingjs color project  [You can view their various projects here.](https://trackingjs.com). 

The color camera is [here](trackingjs.com/examples/color_camera.html).

What the project aims to achieve is to enable voting based on color. 

So far you can detect colors using the camera page, count the color and present the percentage in the output page.  

