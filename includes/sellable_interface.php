<?php
      // Interface Sellable
      interface Sellable {
            public function addStock($numItems);
            public function sellItem();
            public function getStockLevel();
      }
?>
