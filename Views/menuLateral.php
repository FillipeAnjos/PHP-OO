

<br/>
 <div style="background-color: #F2F2F2; width: 330px; padding: 15px; border-radius: 8px;">
    <center>
       <h5>Feed</h5>
    </center> 
    <p>
       <b>Status:</b> <i>logado.</i>  
       <br/>
       <b>Type:</b> <i>usuário.</i>
       <br/>
       <b>Usuário:</b> <i><?= $_SESSION['NOME']; ?></i>
       <br/>
       <b>E-mail:</b> <i><?= $_SESSION['EMAIL']; ?></i>
    </p>
 </div>

 <br/>

 <div id='cssmenu'>
 <ul>
    <li class='active'><a href='<?= url(); ?>'><span>Home</span></a></li>
    <li class='has-sub'><a href='#'><span>Perfil</span></a>
       <ul>
          <li class='active'><a href='#'><span>Visualizar</span></a></li>
          <li class='has-sub'><a href='#'><span>Editar</span></a>
             <ul>
                <li><a href='#'><span>Alterar</span></a></li>
                <li class='last'><a href='#'><span>Excluir</span></a></li>
             </ul>
          </li>
       </ul>
    </li>
    <li class='active'><a href='<?= url("quemSomos"); ?>'><span>Quem somos</span></a></li>
    <li class='active'><a href='<?= url("feedback"); ?>'><span>Feedback</span></a></li>
    <li class='active'><a href='https://play.google.com/store/apps/details?id=com.drawermodelo' target="_blank"><span>Avaliar App</span></a></li>
    <li class='active'><a href='https://play.google.com/store/apps/developer?id=AJS+Technology' target="_blank"><span>Mais App</span></a></li>
    <!--
    <li class='has-sub'><a href='#'><span>Products</span></a>
       <ul>
          <li class='has-sub'><a href='#'><span>Product 1</span></a>
             <ul>
                <li><a href='#'><span>Sub Item</span></a></li>
                <li class='last'><a href='#'><span>Sub Item</span></a></li>
             </ul>
          </li>
          <li class='has-sub'><a href='#'><span>Product 2</span></a>
             <ul>
                <li><a href='#'><span>Sub Item</span></a></li>
                <li class='last'><a href='#'><span>Sub Item</span></a></li>
             </ul>
          </li>
       </ul>
    </li>
	-->
 </ul>
</div>