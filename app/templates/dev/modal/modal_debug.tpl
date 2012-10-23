<div class="modal hide fade" id="modal-debug">
    <div class="modal-header">
        <i class="icon-debug"></i> Debug
        <button class="close" data-dismiss="modal">x</button>
    </div> <!-- /modal-header -->
    <div class="modal-body">
        <ul id="debug-tabs" class="nav nav-tabs">
            <li><a href="#debug-globals" data-toggle="tab">Globals</a></li>
            <li><a href="#debug-krumo" data-toggle="tab">Krumo</a></li>
            <li><a href="#debug-smarty" data-toggle="tab">Smarty</a></li>
        </ul>

        <div class="tab-content">
            <div id="debug-globals" class="tab-pane fade">
                
                <div class="subnav subnav-fixed">
                    <ul class="nav nav-pills">
                        <li>
                            <a style="color: orange;" href="#globals-session">Session</a>
                        </li>
                        <li>
                            <a style="color: green;" href="#globals-post">Post</a>
                        </li>
                        <li>
                            <a style="color: blue;" href="#globals-get">Get</a>
                        </li>
                        <li>
                            <a style="color: purple;" href="#globals-cookies">Cookies</a>
                        </li>
                        <li>
                            <a style="color: brown;" href="#globals-env">Env</a>
                        </li>
                        <li>
                            <a style="color: red;" href="#globals-server">Server</a>
                        </li>
                    </ul>
                </div>
                
                <table class="table table-striped table-bordered" id="globals-session">
                    <thead>
                        <tr>
                            <th style="color: orange;" colspan="3">SESSION</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        {if $smarty.session|@sizeof > 0}
                            <tr>
                                <th>#</th>
                                <th>KEY</th>
                                <th>ITEM</th>
                            </tr>
                            {foreach from=$smarty.session name=session item=item key=key}
                                <tr>
                                    <td>{$smarty.foreach.session.iteration}</td>
                                    <td>{$key}</td>
                                    <td>{$item}</td>
                                </tr>
                            {/foreach}
                        {else}
                            <tr>
                                <td colspan="3">Empty</td>
                            </tr>
                        {/if}
                    </tbody>
                </table> <!-- /globals-session -->
                
                <table class="table table-striped table-bordered" id="globals-post">
                    <thead>
                        <tr>
                            <th style="color: green;" colspan="3">POST</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        {if $smarty.post|@sizeof > 0}
                            <tr>
                                <th>#</th>
                                <th>KEY</th>
                                <th>ITEM</th>
                            </tr>
                            {foreach from=$smarty.post name=post item=item key=key}
                                <tr>
                                    <td>{$smarty.foreach.post.iteration}</td>
                                    <td>{$key}</td>
                                    <td>{$item}</td>
                                </tr>
                            {/foreach}
                        {else}
                            <tr>
                                <td colspan="3">Empty</td>
                            </tr>
                        {/if}
                    </tbody>
                </table> <!-- /globals-post -->
                
                <table class="table table-striped table-bordered" id="globals-get">
                    <thead>
                        <tr>
                            <th style="color: blue;" colspan="3">GET</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        {if $smarty.get|@sizeof > 0}
                            <tr>
                                <th>#</th>
                                <th>KEY</th>
                                <th>ITEM</th>
                            </tr>
                            {foreach from=$smarty.get name=get item=item key=key}
                                <tr>
                                    <td>{$smarty.foreach.get.iteration}</td>
                                    <td>{$key}</td>
                                    <td>{$item}</td>
                                </tr>
                            {/foreach}
                        {else}
                            <tr>
                                <td colspan="3">Empty</td>
                            </tr>
                        {/if}
                    </tbody>
                </table>
                
                <table class="table table-striped table-bordered" id="globals-cookies">
                    <thead>
                        <tr>
                            <th style="color: purple;" colspan="3">COOKIES</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        {if $smarty.cookies|@sizeof > 0}
                            <tr>
                                <th>#</th>
                                <th>KEY</th>
                                <th>ITEM</th>
                            </tr>
                            {foreach from=$smarty.cookies name=cookies item=item key=key}
                                <tr>
                                    <td>{$smarty.foreach.cookies.iteration}</td>
                                    <td>{$key}</td>
                                    <td>{$item}</td>
                                </tr>
                            {/foreach}
                        {else}
                            <tr>
                                <td colspan="3">Empty</td>
                            </tr>
                        {/if}
                    </tbody>
                </table>
                
                <table class="table table-striped table-bordered" id="globals-env">
                    <thead>
                        <tr>
                            <th style="color: brown;" colspan="3">ENV</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        {if $smarty.env|@sizeof > 0}
                            <tr>
                                <th>#</th>
                                <th>KEY</th>
                                <th>ITEM</th>
                            </tr>
                            {foreach from=$smarty.env name=env item=item key=key}
                                <tr>
                                    <td>{$smarty.foreach.env.iteration}</td>
                                    <td>{$key}</td>
                                    <td>{$item}</td>
                                </tr>
                            {/foreach}
                        {else}
                            <tr>
                                <td colspan="3">Empty</td>
                            </tr>
                        {/if}
                    </tbody>
                </table>
                
                <table class="table table-striped table-bordered" id="globals-server">
                    <thead>
                        <tr>
                            <th style="color: red;" colspan="3">SERVER</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        {if $smarty.server|@sizeof > 0}
                            <tr>
                                <th>KEY</th>
                                <th>ITEM</th>
                            </tr>
                            {foreach from=$smarty.server name=server item=item key=key}
                                <tr>
                                    <td>{$smarty.foreach.server.iteration}</td>
                                    <td>{$key}</td>
                                    <td>{$item}</td>
                                </tr>
                            {/foreach}
                        {else}
                            <tr>
                                <td colspan="3">Empty</td>
                            </tr>
                        {/if}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>