# CSC 174 Assignment 04
## City: Juneau
### IA: Xuanyang Wang
### Designer: Bei Lu
### Coder: Masaru Fujimaki

Website location: http://urcsc174.org/assignment04/assignment04-juneau/
GitHub location: https://github.com/valeriewxy/assignment04-juneau
Database location: urcscon3_juneau

### IA - Xuanyang Wang
 
I plan to use same background color and website layout for the three students from the orginal website because of the things that they have in common: male, major in (Financial) Economics, experience in computer science, involvement in fraternities. I am going to apply a different background color or layout to the "odd team member". I chose Sarach as the fourth member on the website because she is a girl and her major interest in humanities, which is completely different from the other three students. She majors in Digital Media Studies and has two clusters in Korean and Psycology.

Layout Suggestions：
Each web pages could have a common footer.
Designer could decide whether or not to keep the original home page styles.
The HTML form could be positioned on a new page, and this page should use the same layout as the students' pages do. 
A different background or theme color needs to be applied to the odd team member's page.
Design could use different color for the hover attribute on navigation.

Typeface/Font Suggestion：
The h1s need to be styled using fonts that are clear and powerful.
It might be better to use san-serif font on the website to convey simpilicity and modernity.
All the body paragraphs should use the same font.

About HTML Form：
Since we are making a portfolio website, I included the form as a "contact us" section. The web form asks input from users about their contact information including name, e-mail and the message they would like to send, with a sumbit at the end of the form.
	Name - input tag, label: Name, type: text;
	Email - input tag, label: E-mail, type: email;
	Message - label: Message, textarea tag, rows = "5", cols = "50"
After the user clicks submit, a window will be open with text "Thank you for your message"



### Designer - Bei Lu

DESIGN CHOICES:
I kept the original color design for the 3 similar students, and used a contrasting color (red-green) for contrasting student in order to empathsis the contrasting nature of our website. All design choices were made to deliver a modern mood as the IA instructed.

C.R.A.P. PRINCIPLES:
	Contrast:
		Font size: Bigger/Smaller size to distinguish importancies
		Color: Used grey, black and white to show the contrast
	Repetition:
		Same navigation bar and footer for every page
		Color: Same set of color for every page with similarity
		Style: Same style using bootstrap for every page
		Format: Same font and format of information for every page
	Alignment:
		Left alignment used across all pages.
	Proximity:
		Related information about individual students were grouped together.

Typefaces/Fonts:
I choosed san-serif as the IA instructed. Both Open sans and Montserrat convey a modern mood
- Open Sans: Titles
- Montserrat: All other text

For layout I used bootstrap across the whole website, combining with customed patterns.

F-Pattern in individual students' page to emphasis important information.
1. Image on the top left;
2. Navigation stretching across, horizontal navigation bar;

Z-Pattern has been used in index page because there's little information included, and empasis the most important thing of our website: contrast. Used a clean, blurred background. Logo's font size changed to larger than other nav items.

As the IA instructed, the contact form is in a seperate page. However, using neither econ students' or odd member's background color will be suitable here since this page is seperated in both content and location. Therefore, I choose to use the same background as index page for this page to indicate this is a functional page. Also, contact page doesn't have the responsibility to shoutout for attention.

 ### Coder - Masaru Fujimaki 

 1. I created the HTML form page using form method which visitor of this web page can write their information and submit to our database. 
 2. I also created the database using phpmyadmin and set up a table storing visitors' name, email, and message. 
 3. I set up the connection between the webpage and the database so that after visitor submit their information, information is automatically stored in the database. 
 4. I also validate all the php file and css documents. 
 All the css files are validated with no errors. However, for php documents, some have errors due to using php include method in the code. 


