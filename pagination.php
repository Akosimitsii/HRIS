<?php if (ceil($total_rows / $limit) > 0): ?>
<ul class="pagination">
	<?php if ($page_number > 1): ?>
	<li class="prev"><a href="<?php echo $redirect; ?>?page=<?php echo $page_number-1 ?>">Prev</a></li>
	<?php endif; ?>

	<?php if ($page_number > 3): ?>
	<li class="start"><a href="<?php echo $redirect; ?>?page=1">1</a></li>
	<li class="dots">...</li>
	<?php endif; ?>

	<?php if ($page_number-2 > 0): ?><li class="page"><a href="<?php echo $redirect; ?>?page=<?php echo $page_number-2 ?>"><?php echo $page_number-2 ?></a></li><?php endif; ?>
	<?php if ($page_number-1 > 0): ?><li class="page"><a href="<?php echo $redirect; ?>?page=<?php echo $page_number-1 ?>"><?php echo $page_number-1 ?></a></li><?php endif; ?>

	<li class="currentpage"><a href="<?php echo $redirect; ?>?page=<?php echo $page_number ?>"><?php echo $page_number ?></a></li>

	<?php if ($page_number+1 < ceil($total_rows / $limit)+1): ?><li class="page"><a href="<?php echo $redirect; ?>?page=<?php echo $page_number+1 ?>"><?php echo $page_number+1 ?></a></li><?php endif; ?>
	<?php if ($page_number+2 < ceil($total_rows / $limit)+1): ?><li class="page"><a href="<?php echo $redirect; ?>?page=<?php echo $page_number+2 ?>"><?php echo $page_number+2 ?></a></li><?php endif; ?>

	<?php if ($page_number < ceil($total_rows / $limit)-2): ?>
	<li class="dots">...</li>
	<li class="end"><a href="<?php echo $redirect; ?>?page=<?php echo ceil($total_rows / $limit) ?>"><?php echo ceil($total_rows / $limit) ?></a></li>
	<?php endif; ?>

	<?php if ($page_number < ceil($total_rows / $limit)): ?>
	<li class="next"><a href="<?php echo $redirect; ?>?page=<?php echo $page_number+1 ?>">Next</a></li>
	<?php endif; ?>
</ul>
<?php endif; ?>


</div>    
<div class="inline">   
<input id="page" type="number" min="1" max="<?php echo $total_pages?>"   
placeholder="<?php echo $page_number."/".$total_pages; ?>" required>   
<button onClick="go2Page();">Go</button>   
</div>    
</div>   
</center>   

<p>
  <script>   
 function go2Page()   
 {   
    var page = document.getElementById("page").value;   
    page = ((page><?php echo $total_pages; ?>)?<?php echo $total_pages; ?>:((page<1)?1:page));   
    window.location.href = '<?php echo $redirect; ?>?page='+page;   
 }   
 </script>
</p>