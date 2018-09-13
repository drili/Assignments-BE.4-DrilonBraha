<?php
      // Golfball class
      class GolfBall implements Sellable {
            private $color;
            private $noinstock;
            private $indentSize;

            public function getColor() {
                  return $this->color;
            }

            public function setColor($color) {
                  $this->color = $color;
            }

            public function addStock($numItems) {
                  $this->noinstock += $numItems;
            }

            public function sellItem() {
                  $returnValue = false;
                  if ($this->noinstock > 0) {
                        $this->noinstock--;
                        $returnValue = true;
                  }
                  return $returnValue;
            }

            public function getStockLevel() {
                  return $this->noinstock;
            }

            public function getIndentSize() {
                  return $this->indentSize;
            }
            public function setIndentSize($indentSize) {
                  $this->indentSize = $indentSize;
            }
      }
?>
