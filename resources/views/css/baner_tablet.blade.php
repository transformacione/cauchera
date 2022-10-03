<style>


@media only screen
and (min-width: 700px)

{
	.baner_tablet{
		background: url({{asset('img/'.$inicio->banner)}}) center;
		height: 887px;
		width: auto;
		background-size: 768px 887px; 
		position: relative;
		background-repeat: no-repeat;
	}
}

@media only screen
and (min-width: 800px)


{
	.baner_tablet{
		background: url({{asset('img/'.$inicio->banner)}}) center;
		height: 1000px;
		width: auto;
		background-size: 868px 1000px; 
		position: relative;
		background-repeat: no-repeat;
	}
}

@media only screen
and (min-width: 900px)


{
	.baner_tablet{
		background: url({{asset('img/'.$inicio->banner)}}) center;
		height: 1000px;
		width: auto;
		background-size: 968px 1000px; 
		position: relative;
		background-repeat: no-repeat;
	}
}


</style>