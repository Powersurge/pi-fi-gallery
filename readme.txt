Pi-Fi Gallery 1.0
Released: March 1, 2016
By Christopher Newell


WHAT IS IN THIS FILE

 * WHAT IS IN THIS FILE
 * REQUIREMENTS
 * WHAT IS PI-FI GALLERY?
 * FEATURES
 * END USER LICENSE AGREEMENT / EULA
 * IMPORTANT INFORMATION
 * HOW TO USE / QUICK START
 * SUPPORT / REQUESTS / HELP / CONTACT


REQUIREMENTS

For Pi-Fi Gallery to function you will need the following:

 * A web server running PHP5 with write access enabled.
 * A Raspberry Pi running Raspbian Jessie or Jessie Lite.
 * An Eye-Fi card and a supported digital camera.
 * A wi-fi network.
 * Familiarity with using SSH (A lot of information can be found about this on the internet).
 * A computer or virtual machine running Windows or OSX (this is used to obtain the MAC address and upload key of the Eye-Fi card that you can only obtain when installing on a Windows or OSX machine).

Additional requirements of the Single File PHP Gallery can be viewed in the README-gallery text file.


WHAT IS PI-FI GALLERY?

Pi-Fi Gallery is an open source project that utilizes an Eye-Fi card for your digital camera and a $35 Raspberry Pi computer to automatically copy the photos from your digital camera to the web gallery on your server.  When a picture is taken on your digital camera, the Eye-Fi card transmits the files to the Raspberry Pi, which in turn uploads the images to your web gallery for all to share.  Give one to all of your family members and never have to deal with the hassles of manually connecting your digital camera to your computer and emailing photos again.  Configuration mainly consists of copying all of the files in this project to your own personal web server and running a few commands on the Raspberry Pi.

Pi-Fi Gallery works in conjunction with the following open source software:

 * Eye-Fi Server by Jeff Tchang
 * Single File PHP Gallery by Kenny Svalgaard


FEATURES

 * Free for private non commercial use
 * Supports multiple uploaders (Raspberry Pi's)
 * Supports multiple users (Eye-Fi cards)
 * Web administration screen to manage uploaders & users.
 
Additional features of the Single File PHP Gallery can be viewed in the README-gallery text file.


END USER LICENSE AGREEMENT / EULA

Pi-Fi Gallery is released to the public domain and can be used for free.  However, Single File PHP Gallery requires a donation under certain circumstances.  See the README-gallery text file for more information.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.


IMPORTANT INFORMATION

 * Make sure your Raspberry Pi is running Rasbian Jessie or Jessie Lite. The included pi-setup script assumes that you are, and will most likely not finish successfully if you aren't. Also make sure that your Pi user is set up with a unique password (not 'raspberry'!)

 * Make sure that your Pi connects to a wi-fi network.  Since the Eye-Fi card transmits your images wirelessly, your Raspberry Pi needs to be connected to the wi-fi network in order to receive the images.  In other words, your place needs to have wi-fi of some sort (access point, wireless router, etc).

 * A fast internet connection is probably necessary if you take a lot of pictures with your camera.

Additional important information of the Single File PHP Gallery can be viewed in the README-gallery text file.


HOW TO USE / QUICK START

Start by placing all of the Pi-Fi Gallery files to any directory of your web server.  Then connect a Raspberry Pi running Rasbian Jessie to the local network and SSH into it.  Once logged in, type in the following commands:

 > raspi-config (if you need to change the default password)
 > wget http://[Your Web Server]/pi-setup-raspbian-jessie.tar.gz
 > sudo tar -xvzf pi-setup-raspbian-jessie.tar.gz -C /
 > sudo chmod a+x pi-setup.sh
 > ./pi-setup.sh

The script will download all of the necessary software.  Then it will ask you to connect to it with your web browser for configuration.  Do this, and for Gallery URL enter the URL of the web server location where you copied all of the Pi-Fi Gallery files to.  Also, enter a password to secure the configuration settings of this uploader (Raspberry Pi) and click the 'Save' button.  Now go back to your SSH session and finish the setup process.

Last, you will need to log into the Gallery Administration page (admin.php) and add an uploader and user to the gallery.  Before, you can do this though, you will need to set up your administration page with a security phrase and password.  View the README-gallery text file for more information on using Single File PHP Gallery.  Once logged in, you can click on the link in the top banner section to configure the uploaders and users.  The Uploader ID can be found when you connect to your uploader (Raspberry Pi) with a web browser.  The User consists of a user name, MAC address of the Eye-Fi card, and upload key of the Eye-Fi card separated by commas.  The user name can just be the name of the owner of the camera or what ever name you want.  It will become a subfolder in the gallery that your pictures will get uploaded to.

Now in order to obtain the MAC address and upload key of your Eye-Fi card, install the official Eye-Fi server software on your Windows PC or Mac, and set it up to transfer files to your computer.  When done, jot down your Eye-Fi card’s MAC address and upload key, which can be found in:

 * C:\Users\[username]\AppData\Roaming\Eye-Fi\Settings.xml (on Windows 7, and possibly 8)
 * ~/Library/Eye-Fi/Settings.xml (on Mac OS X)
 * C:\Documents and Settings\[username]\Local Settings\Application Data\Roaming\Eye-Fi\Settings.xml (on Windows XP)

You’re looking for a 12-digit hexadecimal number (the MAC address) and a 32-digit hexadecimal number (the upload key).


SUPPORT / REQUESTS / HELP / CONTACT

If you need help getting Pi-Fi Gallery to work, then please start by searching the messages in the Github forum.  If you are unable to find the answer that you are looking for, then feel free to post a message.
