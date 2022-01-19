<!DOCTYPE html>
<html lang="de" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>Ticket</title>
      <link rel="stylesheet" href="../res/styleticket.css">
      <!-- <link rel="stylesheet" href="../res/stylenav.css"> -->
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
<?php
    include ("../inc/nav.php");
    include ("functionsT.php");
    // Connect to MySQL using the below function
    $pdo = pdo_connect_mysql();
    // Check if the ID param in the URL exists
    if (!isset($_GET['id'])) {
        exit('No ID specified!');
    }
    // MySQL query that selects the ticket by the ID column, using the ID GET request variable
    $stmt = $pdo->prepare('SELECT * FROM tickets WHERE id = ?');
    $stmt->execute([ $_GET['id'] ]);
    $ticket = $stmt->fetch(PDO::FETCH_ASSOC);
    // Check if ticket exists
    if (!$ticket) {
        exit('Invalid ticket ID!');
}
?>

<div class="content home">

	<h2>Tickets</h2>

	<p>Welcome to the index page. You can view the list of tickets below.</p>

	<div class="btns">
		<a href="createT.php" class="btn">Create Ticket</a>
	</div>

	<div class="tickets-list">
		<?php foreach ($tickets as $ticket): ?>
		<a href="view.php?id=<?=$ticket['id']?>" class="ticket">
			<span class="con">
				<?php if ($ticket['status'] == 'open'): ?>
				<i class="far fa-clock fa-2x"></i>
				<?php elseif ($ticket['status'] == 'resolved'): ?>
				<i class="fas fa-check fa-2x"></i>
				<?php elseif ($ticket['status'] == 'closed'): ?>
				<i class="fas fa-times fa-2x"></i>
				<?php endif; ?>
			</span>
			<span class="con">
				<span class="title"><?=htmlspecialchars($ticket['title'], ENT_QUOTES)?></span>
				<span class="msg"><?=htmlspecialchars($ticket['msg'], ENT_QUOTES)?></span>
			</span>
			<span class="con created"><?=date('F dS, G:ia', strtotime($ticket['created']))?></span>
		</a>
		<?php endforeach; ?>
	</div>

</div>

    </body>

</html>