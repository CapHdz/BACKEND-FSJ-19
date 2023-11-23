<?php
    // Interfaz para la exportación a PDF
    interface ExportarPDF {
        public function exportarPDF();
    }
    // Interfaz para la exportación a JSON
    interface ExportarJSON {
        public function exportarJSON();
    }
    // Interfaz para la exportación a texto
    interface ExportarTexto {
        public function exportarTexto();
    }
    // Clase BoletaPago que implementa las interfaces específicas
    class BoletaPago implements ExportarPDF {
        public function exportarPDF()
        {
            return  "Su boleta de pago está en PDF";
        }
    }
    // Otra clase que puede exportar a JSON y texto
    class OtraBoletaPago implements ExportarJSON, ExportarTexto {
        public function exportarJSON()
        {
            return "Documento exportado en JSON";
        }
        public function exportarTexto()
        {
            return "Documento exportado en texto";
        }
    }
?>