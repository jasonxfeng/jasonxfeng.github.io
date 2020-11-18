<?php

echo '<table class="selection">
			<tr>
				<th colspan="4"><h3>' . _('Order Header Details For Order No').' '.$_GET['OrderNumber'] . '</h3></th>
			</tr>
			<tr>
				<th class="text">' . _('Customer Code') . ':</th>
				<td><a href="' . $RootPath . '/SelectCustomer.php?Select=' . $myrow['debtorno'] . '">' . $myrow['debtorno'] . '</a></td>
				<th class="text">' . _('Customer Name') . ':</th>
				<th>' . $myrow['name'] . '</th>
			</tr>
			<tr>
				<th class="text">' . _('Customer Reference') . ':</th>
				<td>' . $myrow['customerref'] . '</td>
				<th class="text">' . _('Deliver To') . ':</th>
				<th>' . $myrow['deliverto'] . '</th>
			</tr>
			<tr>
				<th class="text">' . _('Ordered On') . ':</th>
				<td>' . ConvertSQLDate($myrow['orddate']) . '</td>
				<th class="text">' . _('Delivery Address 1') . ':</th>
				<td>' . $myrow['deladd1'] . '</td>
			</tr>
			<tr>
				<th class="text">' . _('Requested Delivery') . ':</th>
				<td>' . ConvertSQLDate($myrow['deliverydate']) . '</td>
				<th class="text">' . _('Delivery Address 2') . ':</th>
				<td>' . $myrow['deladd2'] . '</td>
			</tr>
			<tr>
				<th class="text">' . _('Order Currency') . ':</th>
				<td>' . $myrow['currcode'] . '</td>
				<th class="text">' . _('Delivery Address 3') . ':</th>
				<td>' . $myrow['deladd3'] . '</td>
			</tr>
			<tr>
				<th class="text">' . _('Deliver From Location') . ':</th>
				<td>' . $myrow['fromstkloc'] . '</td>
				<th class="text">' . _('Delivery Address 4') . ':</th>
				<td>' . $myrow['deladd4'] . '</td>
			</tr>
			<tr>
				<th class="text">' . _('Telephone') . ':</th>
				<td>' . $myrow['contactphone'] . '</td>
				<th class="text">' . _('Delivery Address 5') . ':</th>
				<td>' . $myrow['deladd5'] . '</td>
			</tr>
			<tr>
				<th class="text">' . _('Email') . ':</th>
				<td><a href="mailto:' . $myrow['contactemail'] . '">' . $myrow['contactemail'] . '</a></td>
				<th class="text">' . _('Delivery Address 6') . ':</th>
				<td>' . $myrow['deladd6'] . '</td>
			</tr>
			<tr>
				<th class="text">' . _('Freight Cost') . ':</th>
				<td>' . $myrow['freightcost'] . '</td>
			</tr>
			<tr>
				<th class="text">' . _('Comments'). ': </th>
				<td colspan="3">' . $myrow['comments'] . '</td>
			</tr>
			<tr>
				<th class="text">' . _('Invoices') . ': </th>
				<td colspan="3">' . $Inv . '</td>
			</tr>
			</table>';

?>
