<div class="container">

      <h1>商品詳細</h1>

      <p>購入数を入力して、購入ボタンを押してください。</p>

      <form class="form-horizontal"  role="form" action="sales_controller.php?create=1" method="post">
        <fieldset>
          <div class="form-group">
          	<input type="text" name="id" value="<?php echo $product->getId(); ?>" style="display: none;">
            <label class="col-sm-2 control-label">商品名</label>
            <div class="col-sm-10">
              <p class="form-control-static">
              	<?php
              		echo $product->getName();
              	?>
              </p>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">価格</label>
            <div class="col-sm-10">
              <p class="form-control-static">
              	<?php
              		echo $product->getPrice();
              	?>
              </p>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">購入数</label>
            <div class="col-sm-1">
              <input type="text" name="qty" value="1" class="form-control" />
            </div>
          </div>
        </fieldset>

        <div class="well">
          <a href="products_controller.php" class="btn btn-default">戻る</a>
          &nbsp;
          <button type="submit" class="btn btn-primary">購入する</button>
        </div>
      </form>

    </div><!-- /.container -->

</body>
</html>