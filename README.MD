# PhysikOnline-Blog Wordpress Theme

## Helpful Resources

https://materializecss.com/

https://codex.wordpress.org/

#

# Overview

Wordpress is a framework for hosting a Blog or similar content distribution systems and is written in _php_.
We use it to host the Physik-Blog, with wordpress remaining mostly native with the exception of some third party plugins and the theme, which will the topic of this guide.

# How to create content

The most important part of a webpage is of course its content. In order to create content, first go to the admin panel. You can reach it by either clicking on 'Bearbeiten' at the bottom of the page or typing:
https://blog.physikelearning.de/wp-admin in your browser. Once you're there you'll have to decide under which section you want to post something. There are 5 sections at the moment:

- Fachschaft
- PhysikOnline
- Home
- Studien Informationen
- International Students

where home is more like a button than really a section.
You can also add sections, but more to that later.

So how do you add a page to a section?

Click on the desired section on the left menu. Then you have to decide under which submenu you want to categorize you page.

Let's for example have a look at the 'International Students' section. Here we have an entry called 'International Students' with no line in front of it, an entry called 'Information' with one line in front of it, and a bunch of other entries with two lines in front of them.

So what does that mean?

The page with no lines is the front page of the section. It's where you land, when you click on the button on the bar on the top of the page.
The page with one line isn't really a page, but a submenu under which you can categorize your page.
And all the other entries with two lines - those are actual pages.

So finally - how to create a page:

At the section overview, click on 'Add new'. Here you can add a title and the content of the page. Then - and now comes the important part - on the right side, there should be a menu. If there isn't click on the gear symbol on the top right corner. In that menu go to the tab 'Document' and under 'Page Attributes' choose as the parent page the submenu page (the one with only one line) under which you want to categorize it. It's important that you only choose the ones with one line, otherwise there will be a display error.

Once you've done that, click on 'publish' and confirm.
And that's it!

## Creating a new submenu

'Add new', choose the title of the submenu and write it in the title. Don't bother writing any content, it won't be displayed.
Then on the right hand side menu under 'Document' 'Page Type' enter `sidebar-menu` and hit enter. Then publish. Voila

# How it works

In order for a wordpress theme to work, it needs the following main files:

- **index.php**: The first page that's displayed when you enter the blog
- **header.php**: Contains dependencies, e.g. loads the css file. Usually gets included in template files at the top via get_header()
- **footer.php**: Contains the footer (the bar at the end of the page with the copyright stuff) and some javascript code to make the code running. Usually get included at the end of a template file via get_footer().
- **page.php**: Template file for pages (There's a difference between pages and posts)
- **single.php**: Template file for posts
- **searchform.php**: Contains the code for a searchbox (for implementation example see sidebar.php)
- **search.php**: The page where the search results are displayed
- **style.css**: Contains the style definitions for the page.
- **404.php**: The page that will be displayed when for any reason you land on a page that doesn't exist

Apart from that this theme has two more fundamental files: **sidebar.php** and **navbar.php**.
Those files contain the code for the sidebar navigation and the navbar respectively and were outsourced due to readability.
They're both stored in the folder "_assets_" and can be included via _get_template_part('partials/navbar')_ or _get_template_part('partials/sidebar')_.

## The Loop

First I want to have a word about how wordpress retrieves and displays posts or pages on the website. Wordpres

For that have a look at the following code, which is in wordpress called **_the Loop_**

    <?php
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            //
            // Post Content here
            //
        } // end while
    } // end if
    ?>

There's a lot of Resources about wordpress' Loop, here I just want to quickly go through the main intuition of it (or how I understand it. Probably not 100% correct). For more details have a look at for example

https://developer.wordpress.org/themes/basics/the-loop/ .

So basically the loop is the subroutine, that loads all the posts that you created from wherever the posts are saved when they were created, and makes them available for display.

You can read it in the code as follows. First there's a query whether there are posts: `if ( have_posts() )`. This will probably return a `true` if there are posts, that were not loaded yet and `false` when there are no posts, or all posts have been loaded. If there are posts, the code goes into a while-loop, which again runs as long as there are posts.

So while there is a post, wordpress will load the post as a global variable via `the_post()` and do with the post whatever you write inside the while-loop (area that says 'Post Content here'). For example you could write something like `the_title()` which retrieves and displays the title of the post. Or you could display the excerpt of the post with `the_excerpt()`.
There are really a lot of things you can do.

## Loading specific kinds of posts

The Loop in its native form loads all posts that were ever written. But what if you only want to load very specific posts, for instance ones, that are in the 'Fachschaft' category?

For those cases you have to make use of WP_Query. To be perfectly honest, I don't exactly know how this all works, but here's what I can tell you. If you want to filter posts for example that are only in the 'Fachschaft' category, you have specify an array, with all your specifications in there and create a new query object by parsing the array in the WP_Query() function/class/object, whatever that is.
Then from that query you can access the posts, that you are looking for.

In the following example there's a piece of code, that does exactly that. We define a variable called `$args` with all the specifications that we want in our posts, in this case, we want it to be in the 'Fachschaft' category and we also want it to be sorted by their title.
Then we parse those arguments into the WP_Query and get out of it some query object, which contains the posts we wanted, I think. And then we can use it in a similar way to the standard loop.

    $args = array(
        'category_name' => 'Fachschaft',
        'order'          => 'ASC',
        'orderby'        => 'title'
    );

    $new_query = new WP_Query($args);
    if ($new_query->have_posts()) {
        while ($new_query->have_posts()) {
            $new_query->the_post();

            the_title();
            the_content();

        }
        $new_query->reset_postdata();
    }

In case you want to learn more about it, have a look here:

https://codex.wordpress.org/Class_Reference/WP_Query#Usage

# Styling

In case you were wondering, why the blog doesn't look like the piece of organic matter that one flushes down the toilet, it's because we use the framework materialize.css. You can find a full documentation here:

https://materializecss.com/

If you know what you're doing, feel free to restyle it to your hearts desires.
