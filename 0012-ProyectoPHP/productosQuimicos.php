<?php
    class prodQuimicos{
        public function __construct(
            private string $prodPrimarios,
            private int $prodCantPrimarios,
            private string $IDPrimarios
        )
        {}
            public function getProdPrimarios(): string
            {
                        return $this->prodPrimarios;
            }
            public function setProdPrimarios(string $prodPrimarios): self
            {
                        $this->prodPrimarios = $prodPrimarios;
                        return $this;
            }
            public function getProdCantPrimarios(): int
            {
                        return $this->prodCantPrimarios;
            }
            public function setProdCantPrimarios(int $prodCantPrimarios): self
            {
                        $this->prodCantPrimarios = $prodCantPrimarios;

                        return $this;
            }
            public function getIDPrimarios(): string
            {
                        return $this->IDPrimarios;
            }
            public function setIDPrimarios(string $IDPrimarios): self
            {
                        $this->IDPrimarios = $IDPrimarios;
                        return $this;
            }
            public function perjudicial()
            {
                echo "es perjudicial";
            }
    }
?>