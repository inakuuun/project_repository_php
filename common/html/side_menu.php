        <div class="side_menu">
            <h3>検索</h3>
            <form method="GET" action="top.php">
                <p>カテゴリー検索</p>
                <select name="categories">
                    <option value="0"></option>
                    <option value="1">食品</option>
                    <option value="2">書籍</option>
                    <option value="3">乗り物</option>
                    <option value="4">衣類</option>
                </select>
                <p>曖昧検索</p>
                <input type="text" name="vagueName"><br />
                <input type="submit" value="検索実行"/>
            </form>
        </div>