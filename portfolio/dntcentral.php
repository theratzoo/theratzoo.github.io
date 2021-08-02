<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <title>D&T Central</title>
        <link rel="stylesheet" type="text/css" href="/ldstyle.css">
        <link rel="icon" href="/img/ld.png">
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    </head>
    <body id="home" onload="">
        <?php
        include("../ldnavbar.php");
        ?>
        <!--navbar:
            about
            projects
            resume
            socials
        -->
        <div id="me">
               Death and Taxes Central
            </div>  
        <div class="container">
            <br>
            <hr class="mainhr"> 
            <br>
            <p>Death and Taxes Central is a website I developed to provide people who play Magic: the Gathering information on a specific way to play the game- the deck archetype known as Death and Taxes. The website contains guides, decklists, interactive polls, discussions, and other resources to ultimately provide help to others. Below is a link to the website:</p>
            <a href="https://dntcentral">Death and Taxes Central Homepage</a>
            <br>
            <p>Notice: some of the following sections are a little Magic: the Gathering technical. Familiarizing oneself with the game is recommended before proceeding.</p>
            <br>
            <p>Also, for security reasons, I will refrain from posting code samples for the time being. If you have any questions regarding the code please message me.</p>
            <!--can either include link to wiki, and/or include link to my own writeup on Magic: the Gathering, plus other stuff such as deck archetypes. Or even include the thing I submitted for WR 1010-->
            <br />
            <hr class="mainhr" />
            <br />
            <h3>Inspiration</h3>
            <p>Before talking about my motivation for building the website, I would like to mention how I came to the Death and Taxes deck archetype. I first discovered the Death and Taxes archetype while exploring the Legacy format, looking for a fun deck to play. Turns out, Death and Taxes is one of the cheapest decks to play in the format. For that reason and the fact that I enjoyed playing it on a free platform and watching others pilot it, I decided to build the deck. I ended up loving the deck and eventually built it in Modern as well. Ultimately, a big reason why I kept playing the archetype and even got into it was the content creators out there. They taught me a lot about how to play Death and Taxes, along with lots of important nuances. So I decided that I wanted to give back to the community, and I used my knowledge in HTML and CSS to develop a website with guides on Death and Taxes.</p>
            <br>
            <p>While content already existed for Death and Taxes, the vast majority of it was in the form of videos. So written guides were still valuable for the community. However, there were websites dedicated to <i>Legacy</i> Death and Taxes, so I decided to instead focus on Death and Taxes "in all formats". As will be discussed later, the website eventually focuses on Death and Taxes in the Modern format, but it did start as a website to encompass all formats (hence the "central" in the domain name).</p>
            <br>
            <hr class="subhr">
            <br>
            <h3>Development</h3>
            <p>I first began developing the website during my free time at school, using basic HTML and CSS skills that I learned and self-taught myself. It started out with fundamental guides and decklists for Death and Taxes in each format. I spent tens of hours laboring on several different webpages. After I finished enough, I began hosting the website and prepared it to share it with the world...</p>
            <br />
            <hr class="subhr" />
            <br />
            <h3>Feedback</h3>
            <p>After I first shared the website on various Magic: the Gathering forums on Reddit, I quickly learned a fatal mistake I made while developing this website (and I would learn for future projects). When I was first designing and developing the website, I decided to create guides, decklists, and other forms of content based on what I thought others would enjoy and would serve my brand well. However, turns out, that is not a great strategy. I learned quickly that there was a lot of demand for guides, decklists, and other articles on Modern Death and Taxes, whereas the demand for Legacy Death and Taxes articles was already saturated by other content creators. So I decided to focus less and less on other formats and more on Modern, until the website focused solely on Modern Death and Taxes, with other formats still there for representation purposes.</p>
            <br />
            <p>While it sucked to see the hard work I spent on Legacy Death and Taxes articles go to waste, I am thankful I sought out the feedback and received it early on. If I continued writing Legacy articles, I would've spent even more time on a less-demanded asset. The feedback I received from my first share along with the tens of others I did within the next year helped shape the kind of content I ended up producing on my website.</p>
            <br />
            <hr class="subhr" />
            <br />
            <h3>Growing the Service</h3>
            <p>As mentioned above, I continued sharing my latest content on Reddit. I used the feedback to decide what to produce next and optimize my already-posted content. Since the first post, I began adding tons of new forms of content, including monthly polls on whether to keep or mulligan hands, guides on tons of variations of Modern Death and Taxes, matchup guides, analyses on new cards and their potential in Modern Death and Taxes, and even several YouTube videos of me playing Modern Death and Taxes. Aside from writing and filming, I also began growing my development skills to make the website look and function better. I was able to better optimize the HTML and CSS code, making the website look better and be better-structured. In addition, I utilized JavaScript and PHP that I self-taught myself to add several interactive features to the website. Those features, all self-implemented, included a poll (where the data is submitted to a MySQL database), a site search bar, and a newsletter sign-up form. I also had a script that, whenever I typed a card name on my website, the card name would become a hyperlink that, when hovered by a mouse, would show the card's image (a very difficult project to implement). Finally, I added a way to fetch out the most recent articles to post them on the home page, along with only show articles on some websites that users have not visited yet.</p>
            <br>
            <hr class="mainhr">
            <br>
            <h3>Conclusion</h3>
            <p>Ultimately, Death and Taxes Central was an amazing experience for me. I learned a ton of things throughout the project's journey, from website design, to backend scripts, to user feedback and ways to promote a product. I am also happy that I was able to help people improve their skills and knowledge in Magic: the Gathering: every time I read someone's nice comment, it helps motivate me to continue producing content. While I have not been able to post much recently due to business, I am still keeping the website hosted and hope to be able to one day return to producing content there. At the very least, I have become a stronger developer and hope to use these skills learned in my future ambitions.</p>
            <br>
            <br>
            
        </div>
        <footer>
            <h6>This website is, in fact, created by Luke Deratzou. Any questions or issues, please contact the owner.</h6>
        </footer>
        <!--insert professional footer here-->
        

    </body>
</html>