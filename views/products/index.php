<div class="container">
	<h1>商品一覧</h1>

    <p>購入したい商品を選択してください。</p>

    <p class="lead">
        <ul class="products">
        	<?php
        	 foreach ($products as $product) {
	        	 echo "<li>";
	        	 echo "<a href='sales_controller.php?product=". $product->getId() ."'>";
          		 echo $product->getName(). "</a></li>";           	 	
	        }
          	
           	?>
    	</ul>
    </p>
</div>
</body>
</html>