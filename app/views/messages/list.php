<table class="table" id="friendList">
	<thead>
		<tr>
			<td colspan='2'>Friend List</td>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>
				photo
			</td>
			<td>
				name
			</td>
		</tr>
	</tbody>
</table>

<table class="table" id="messageList">
<thead>
		<tr>
			<td colspan='2'>Message List</td>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="photo">
				photo
			</td>
			<td class="messageText">
				name
			</td>
		</tr>
	</tbody>
</table>



<?php

echo "Hello";
if (!empty($message_list)) {
	foreach ($message_list as $key => $val) {
		echo "<b>".$key."</b>	-	<i>".$val."</i>";
	}
}



?>