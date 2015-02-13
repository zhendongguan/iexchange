<extend name="Base/common"/>

<block name="header">
    <header class="jumbotron subhead" id="overview">
		<div class="container">
			<h2>{$info.title}</h2>
			<p>
				<span  class="pull-left">
					<span class="author">{$info.uid|get_username}</span>
					<span> 发表于 {$info.create_time|date='Y-m-d H:i',###}</span>
				</span>
				<span class="pull-right">
					<article:prev name="prev" info="info">
                        <a href="{:U('?id='.$prev['id'])}">上一篇</a>
                    </article:prev>
                    <article:next name="next" info="info">
                        <a href="{:U('?id='.$next['id'])}">下一篇</a>
                    </article:next>
				</span>
			</p>
		</div>
	</header>
</block>

<block name="body">
    <div class="span7 main-content">
        <!-- Contents
        ================================================== -->
        <section id="contents">{$info.content}</section>
        
        <hr/>
        {:hook('documentDetailAfter',$info)}
    </div>
</block>
