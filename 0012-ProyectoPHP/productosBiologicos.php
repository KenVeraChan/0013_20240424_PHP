<?php
    class prodBiologicos extends prodQuimicos
        {
        public function __construct(
            private string $prodBio,
            private int $cantBio
        ){}
        public function getProdBio(): string
        {
            return $this->prodBio;
        }
        public function setProdBio(string $prodBio): self
        {
            $this->prodBio=$prodBio;
            return $this;
        }
        public function getcantBio(): int
        {
            return $this->cantBio;
        }
        public function setcantBio(int $cantBio): self
        {
            $this->cantBio=$cantBio;
            return $this;
        }
        
        }

?>