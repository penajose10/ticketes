{extends file="base.tpl"}

{block name="content"}
  <div class="jumbotron">
      <div class="container">
        <h1>Bienvenido {$nombre_usuario}</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p>
      </div>
    </div>
    <div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<form role="form">
				<div class="form-group">
					 <label for="exampleInputEmail1">Email address</label><input type="email" class="form-control" id="exampleInputEmail1" />
				</div>
				<div class="form-group">
					 <label for="exampleInputPassword1">Password</label><input type="password" class="form-control" id="exampleInputPassword1" />
				</div>
				<div class="form-group">
					 <label for="exampleInputFile">File input</label><input type="file" id="exampleInputFile" />
					<p class="help-block">
						Example block-level help text here.
					</p>
				</div>
				<div class="checkbox">
					 <label><input type="checkbox" /> Check me out</label>
				</div> <button type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>
	</div>
</div>
{/block}



