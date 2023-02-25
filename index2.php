<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>My Personal Portfolio</title>
	<link rel="stylesheet" href="stylesindex2.css">
</head>
<body>
	<header>
		<h1>My Name</h1>
		<nav>
			<ul>
				<li><a href="#about">About</a></li>
				<li><a href="#projects">Projects</a></li>
				<li><a href="#contact">Contact</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<section id="about">
			<h2>About Me</h2>
			<p>Write a brief introduction about yourself here.</p>
		</section>
		<section id="projects">
			<h2>My Projects</h2>
			<ul>
				<li>
					<h3>Project Title</h3>
					<p>A short description of the project.</p>
					<a href="#">View Project</a>
				</li>
				<li>
					<h3>Project Title</h3>
					<p>A short description of the project.</p>
					<a href="#">View Project</a>
				</li>
				<li>
					<h3>Project Title</h3>
					<p>A short description of the project.</p>
					<a href="#">View Project</a>
				</li>
			</ul>
		</section>
		<section id="contact">
			<h2>Contact Me</h2>
			<form>
				<label for="name">Name</label>
				<input type="text" id="name" name="name">

				<label for="email">Email</label>
				<input type="email" id="email" name="email">

				<label for="message">Message</label>
				<textarea id="message" name="message"></textarea>

				<input type="submit" value="Send">
			</form>
		</section>
	</main>
	<footer>
		<p>&copy; 2023 My Name</p>
	</footer>
</body>
</html>
