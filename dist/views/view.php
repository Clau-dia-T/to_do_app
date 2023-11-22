<body onload="setTheme()">

    <header></header>

    <main>
        <div class="todo__box">
            <div class="title-box">
                <h1 class="title-box__title">ToDo</h1>
                <form method="POST">
                    <button name="themetoggle">
                        <img id="themetoggle" class="title-box__img" src="<?= $url_public; ?>css/img/icon-moon.svg" alt="ld-switch">
                    </button>
                </form>
            </div>
            <div class="boxes-box">
                <div class="box01">
                    <div class="circle"><img class="check" src="<?= $url_public; ?>css/img/icon-check.svg" alt="check"></div>
                    <form method="POST">
                        <input class="box01__input" type="text" name="todo" placeholder="Create a new todo...">
                    </form>
                </div>
                <div class="box02">
                    <div class="box02__items">
                        <div class="dragbox">
                            <?php foreach($list_todo as $l): ?>
                                <div id="<?=$l['position'];?>" draggable="true" class="box02__item <?= ((getStatus($l['id'])["estado"]) == "completed")? "active" : "";?>">
                                    <div class="left">
                                        <form method="POST">
                                            <button class="box02__btn" name="complete" value="<?=$l['id'];?>">
                                                <div class="circle"><img class="check <?=(getStatus($l['id']) == "completed")? "active" : "";?>" src="<?= $url_public; ?>css/img/icon-check.svg" alt="check"></div>
                                            </button>
                                        </form> 
                                        <p class="todo <?= ((getStatus($l['id'])["estado"]) == "completed")? "active" : "";?>"><?= $l['content'];?></p>
                                    </div>
                                    <div class="right">
                                        <form method="POST">
                                            <button class="box02__btn" name="erase" value="<?=$l['id'];?>">
                                                <img class="cross" src="<?= $url_public; ?>css/img/icon-cross.svg" alt="x">
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="box02__item last">
                            <p><?= count($list_active); ?> items left</p>
                            <div class="filters">
                                <a href="#" onclick="showAll()" class="filter active">All</a>
                                <a href="#" onclick="showIncompleted()" class="filter">Active</a>
                                <a href="#" onclick="showCompleted()" class="filter">Completed</a>
                            </div>       
                            <form method="POST">
                                <input type="submit" class="last__input" name="clear" value="Clear Completed"></input>
                            </form>                    
                        </div>
                    </div>
                </div>
                <div class="box01 mobile__f">
                    <a href="#" onclick="showAll()" class="filter active">All</a>
                    <a href="#" onclick="showIncompleted()" class="filter">Active</a>
                    <a href="#" onclick="showCompleted()" class="filter">Completed</a>
                </div>
            </div>
            <footer>
                <p>Drag and drop to reorder list</p>
            </footer>
        </div>
    </main>
    
    <script src="<?= $url_public; ?>js/main.js"></script>
    <script src="<?= $url_public; ?>js/draganddrop.js"></script>

    <script>
        var theme = "<?= $theme; ?>";
    </script>
    
</body>
</html>