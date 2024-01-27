<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wild Template</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <nav>
            <img class="logo" src="images/fav-icon-dev.svg" alt="Wild Code School logo">
            <ul>
                <li><a href="/#learn">Learn with pleasure</a></li>
                <li><a href="/#skills">Increase your skills</a></li>
                <li><a href="/#contact">Contact us</a></li>
            </ul>
        </nav>
    </header>
    <section class="header-image">
        <h1>
            Workshop introduction to PHP
        </h1>
        <p>
            Discover the basics of PHP and create a contact form.
        </p>
    </section>
    <main class="container">
        <section class="grid">
            <article id="learn">
                <h2>Learn with pleasure</h2>
                <p>
                    <small>@tic</small>
                    <small>Jul 22, 2019</small>
                </p>
                <figure class="">
                    <img src="https://picsum.photos/seed/learn/800/400" alt="">
                </figure>
                <p>Non arcu risus quis varius quam quisque. Dictum varius duis at consectetur lorem. Posuere
                    sollicitudin aliquam ultrices sagittis orci a scelerisque purus semper. </p>
            </article>
            <article id="skills">
                <h2>Increase your skills</h2>
                <p>
                    <small>@tac</small>
                    <small>Aug 14, 2019</small>
                </p>
                <figure>
                    <img src="https://picsum.photos/seed/skills/800/400" alt="">
                </figure>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Accumsan lacus vel facilisis volutpat est velit egestas.
                    Sapien eget mi proin sed. Sit amet mattis vulputate enim.
                </p>
            </article>
        </section>
        <section id="contact">
            <h2>Contact-Us</h2>
            <form>
                <div class="grid">
                    <label for="firstname">
                        First Name
                        <input id="firstname" name="firstname" type="text">
                    </label>
                    <label for="lastname">
                        Last Name
                        <input id="lastname" name="lastname" type="text">
                    </label>
                </div>
                <label for="campus">Campus</label>
                <input id="campus" name="campus" type="text">
                <label for="message">Message</label>
                <textarea id="message" name="message"></textarea>
                <button type="submit">Submit</button>
            </form>
        </section>
    </main>
    <footer>
        <img class="logo" src="images/fav-icon-dev.svg" alt="Wild Code School logo">
        <p>
            <strong>
                <a href="https://www.wildcodeschool.com" target="_blank">Wild Code School</a>
            </strong>
            <br>
            <small>Learn tech skills with passion ❤️</small>
        </p>
        <p>
            <small>Images from <a href="https://unsplash.com/fr" target="_blank">Unsplash</a></small>
        </p>
    </footer>
</body>

</html>