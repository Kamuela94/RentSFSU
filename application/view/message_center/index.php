<?php
    $userId = $_SESSION['UserId'];    ?>
	    <ul id="" d="messages">
                <?php
                /* @var $_new_messages array */
                if ($messages != null){
                    foreach ($messages as $i => $row) {
                        $messageId = $row["MessageId"];
                        $senderId = $row["SenderId"];
                        $recipientId = $row["RecipientId"];
                        $listingId = $row['ListingId'];
                        $title = $row['Title'];
                        $messageBody = $row['Body'];
                        $url = URL;
                        $_POST['messageId'] = $messageId;

                            echo "<li class='messages'>\n";
            # Listing heading
                            echo "  <div class='messages-heading'>\n";
                            echo "		<p class='messages-heading-left'>\n";
                            echo "			<span >$title</span>\n";
                            echo "		</p>";
                            echo "  </div>\n";

                            # contact landlord
                            echo " <a id='reply' class='bottom-right btn btn-default' href='#contact' data-toggle='modal' data-target='.contact'> reply </a>\n";

                            # Listing details
                            echo "	<div class='messages-details'>\n";
                            # Photos window
                            echo "		<div class='messages-details-left'>\n";
                            echo "		</div>\n";

                            # Listing summary
                            echo "		<div class='messages-details-right'>\n";
                            echo "			<p class='messageBody'>$messageBody</p>\n";
                            echo "		</div>\n";
                            echo "  </div>\n";
                            # Delete
                            echo "<form method='post' action='$url/api/delete_message'>";
                            echo "<input type='hidden' name='messageId' value='$messageId'>";
                            echo "<input type='submit' id='delete' name='deleteMessage' class='form-input bottom-right btn btn-default' btn btn-default' value='delete'/>";
                            echo "</form>";
                            echo "</li>\n";
                    }
                }
                else{
                    echo "<li class='messages'>\n";
            # Listing heading
                            echo "  <div class='messages-heading'>\n";
                            echo "		<p class='messages-heading-center'>\n";
                            echo "			<span >You do not have any messages at this time.</span>\n";
                            echo "		</p>";
                            echo "  </div>\n";
                    echo "</li>\n";
                }
?>
                    
		</ul>
