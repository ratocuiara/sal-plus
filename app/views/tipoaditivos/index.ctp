    <div id="center-column">
        <div class="top-bar">
			<h4><i class="fa fa-angle-right"></i> Tipo de aditivos
            <?php 
            if ( $this->action == 'index' || $this->action == 'find' )
                echo $this->Html->link(__('Novo', true), array('action' => 'add'), array('class'=>'btn btn-primary')); 
            ?>
			</h4>			
        </div> 
        <div class="filter-form">
        <?php
            echo $form->create('Tipoaditivo', array(
                    'url' => array_merge(array('action' => 'find'), $this->params['pass']),
                        'class'=>'form-inline'
                    ));
            echo "<div class=\"form-group\">";
            echo $form->input('title', array('label'=>'Descrição','div' => false,'class'=>'form-control'));
            echo $form->submit('Filtrar', array('div' => false, 'alt'=>'filtrar', 'title'=>'filtrar','class'=>'btn btn-primary'));
            echo "</div>";
            echo $form->end();
        ?> 
        </div>
        <?php if ( $tipoaditivos != null) { ?>        
        <div class="tipoaditivos index">                
            <div class="row mt">
            <div class="col-lg-12">
            <div class="content-panel">
            
            <section id="unseen">     
                <table class="table table-bordered table-striped table-advance table-hover">
                <tr>
                    <th><?php echo $this->Paginator->sort('Descrição','title');?></th>
                    <th class="actions"><?php __('Ações');?></th>
                </tr>
                <?php foreach ($tipoaditivos as $tipoaditivo): ?>
                <tr>
                    <td><?php echo $tipoaditivo['Tipoaditivo']['title']; ?>&nbsp;</td>
                    <td class="actions">
                        <div class="btn-group">
                          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                            Selecione <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                              <li><?php echo $this->Html->link('Consultar', array('action' => 'view', $tipoaditivo['Tipoaditivo']['id']),array('escape' => false)); ?></li>
                              <li><?php echo $this->Html->link('Editar', array('action' => 'edit', $tipoaditivo['Tipoaditivo']['id']),array('escape' => false)); ?></li>
                              <li><?php echo $this->Html->link('Excluir', array('action' => 'delete', $tipoaditivo['Tipoaditivo']['id']),array('escape' => false), sprintf(__('Tem certeza que deseja excluir o tipo de aditivo %s?', true), $tipoaditivo['Tipoaditivo']['title'])); ?></li>
                          </ul>
                        </div>                        
                    </td>
                </tr>
                <?php endforeach; ?>
                </table>
            </section>                  
            <?php echo $this->element('paginator'); ?>
            </div><!-- /content-panel -->
            </div><!-- /col-lg-4 -->			
            </div><!-- /row -->
        </div>                
        <?php 
        } else {
            echo '<div style="clear:both;" class="alert alert-info"><i class=" fa fa-ellipsis-v"></i>&nbsp;<b>Não existem itens para listar</b></div>';
        } ?>                           
    </div>
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->