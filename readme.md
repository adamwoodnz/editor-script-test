# Editor Script Test

License:           GPL-2.0-or-later

License URI:       https://www.gnu.org/licenses/gpl-2.0.html

Block to test whether the editor script dependencies load in the post editor and site editor

## Installation and running the test script

Ensure you have Node 18

Run the following commands

`npm install`

`npm run start`

The site should load in your browser at http://localhost:8881

Ensure in the admin that WordPress 6.3 is running (you might need to upgrade)

Install this plugin

Add this block to a page in the Site Editor and a post in the Post Editor

Open the console in developer tools for each, and you should see the message `imagesloaded available!`
