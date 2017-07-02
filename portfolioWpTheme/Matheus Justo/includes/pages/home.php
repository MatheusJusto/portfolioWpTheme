
                <div class="container">
                    <h2>SERVIÇOS</h2>
                    <div class="blocos">

                        <div class="bloco-servico bloco-design wow slideInDown" data-wow-duration="1s" data-wow-delay="1">
                            <header>
                                <h3>Design</h3>
                            </header>
                            <div class="content-servico">
                                <img src="img/design.png" alt="icone design">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id autem ad culpa, perferendis eos aliquam.</p>
                            </div>                    
                        </div><!--/design-->

                        <div class="bloco-servico bloco-frontend wow slideInDown" data-wow-duration="1.5s" data-wow-delay="1">
                            <header>
                                <h3>Front end</h3>
                            </header>
                            <div class="content-servico">
                                <img src="img/devicon.png" alt="icone desenvolvedor">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id autem ad culpa, perferendis eos aliquam.</p>
                            </div>
                        </div><!--/frontend-->

                        <div class="bloco-servico bloco-conteudo wow slideInDown" data-wow-duration="2s" data-wow-delay="1">
                            <header>
                                <h3>Conteudo</h3>
                            </header>
                            <div class="content-servico">
                                <img src="img/adm.png" alt="icone administrador de conteudo">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id autem ad culpa, perferendis eos aliquam.</p>
                            </div>
                        </div><!--/conteudo-->
                             
                        <div class="bloco-servico bloco-impressos wow slideInDown" data-wow-duration="2.5s" data-wow-delay="1">
                            
                            <?php
								$args = array('post_type'=>'serviços','offset'=>0, 'showposts'=>-1);
								$my_posts = get_posts( $args );
							  ?>
                            <?php
                                if($my_posts) : foreach ( $my_posts as $post ) : setup_postdata( $post );
                            ?>
                            <header>
                                <h3><?php the_title();?></h3>
                            </header>
                            <div class="content-servico">
                                <img src="img/off.png" alt="icone mídia offline">
                                <p><?php the_content();?></p>
                            </div>
                        </div><!--/impressos-->
                        <?php endforeach; ?>
                        <?php endif; ?>

                        
							<?php
								if($my_posts) : foreach ( $my_posts as $post ) : setup_postdata( $post );
							?>
								<div class="item">
									<h2><?php the_title()?></h2>
									<p><?php the_content()?></p>
								</div>
							<?php endforeach;?>
							<?php endif; ?>
                    </div><!--/blocos-->

                    <hr>
                </div><!--/container-->
            </section>
            <section class="tecnologias">
                <div class="container">
                    <h2>TÉCNOLOGIAS QUE GOSTO <br> DE USAR</h2>
                </div>
                <div class="tecnologias-bg">
                    <div class="container">
                        <div class="blocos">
                        <div class="bloco-jquery bloco-tecnlogias">
                            <img src="img/tecnologias/jquery.png" alt="">
                        </div><!----/jquery-->
                        <div class="bloco-js bloco-tecnlogias">
                            <img src="img/tecnologias/js.png" alt="">
                        </div><!--js-->
                        <div class="bloco-wordpress bloco-tecnlogias">
                            <img src="img/tecnologias/wp.png" alt="">
                        </div><!--/wordpress-->

                        <!-- segunda linha -->

                        <div class="bloco-sass bloco-tecnlogias">
                            <img src="img/tecnologias/sass.png" alt="">
                        </div><!----/sass-->
                        <div class="bloco-git bloco-tecnlogias">
                            <img src="img/tecnologias/git.png" alt="">
                        </div><!--git-->
                        <div class="bloco-angular bloco-tecnlogias">
                            <img src="img/tecnologias/angular.png" alt="">
                        </div><!--/angular-->

                        </div>
                        
                    </div><!--/container-->
                </div>
                <div class="container">
                    <hr>
                </div>
                
            </section>
            <section class="sobre">
                <div class="container">
                    <h2>UM POUCO SOBRE MIM</h2>
                    <div class="container">
                        
                    </div>
                    <section class="sectionEsquerda">
                        <header>
                            <img src="img/perfil.png" alt="">
                            <h3>Matheus Justo</h3>
                        </header>
                        <article class="texto">
                            <p>
                                Olá, Meu eu sou Matheus, tenho 20 anos, moro no Guarujá, trabalho com design gráfico e desenvolvimento front end.</p>
                            <p> Estudei design gráfico durante dois anos em uma gradução de curta duração na universidade paulista em Santos, e atualmente sou estudante de Administração e faço cursos paralelos voltado a área de desenvolvimento.</p>
                            <p> O curso de administração veio abrindo meus horizontes para áreas de gestão de projetos, capitais intelctuais,
                                gestão de sistema de informação, tempo e diversas outras coisas que envolvem a área de criação e desenvolvimento.</p>
                            </p>
                        </article>
                        
                    </section>
                    
                    <artcile class="sectionDireita">
                        <header>
                            <h3>CURRÍCULO RESUMIDO</h3>
                        </header>
                        <article class="texto">
                            <ul>
                                <li>Bacharel em Administração (andamento)</li>
                                <li>Formação front end (caelum 2016)</li>
                                <li>Técnologo em Design Gráfico (UNIP 2014)</li>
                                <li>Photoshop anvançado (Tecnoponta 2014)</li>
                                <li>Mais de 2 anos de expêriencia profissional
        com designer gráfico</li>
                            </ul>
                            <p>
                                PARA VER MEU CÚRRICULO COMPLETO <br>CLIQUE EM VER MAIS
                            </p>
                            <a href="curriculo.html">VER MAIS</a>
                        </article>

                    </section>
                    
                </div>
            </section>