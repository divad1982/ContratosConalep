<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class catalogobancos_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('catalogobancos')->insert(['IdBanco' => 1, 'BancoCorto' => 'BANAMEX', 'Banco' => 'Banco Nacional de México, S.A., Institución de Banca Múltiple, Grupo Financiero Banamex']);
        DB::table('catalogobancos')->insert(['IdBanco' => 2, 'BancoCorto' => 'BANCOMEXT', 'Banco' => 'Banco Nacional de Comercio Exterior, Sociedad Nacional de Crédito, Institución de Banca de Desarrollo']);
        DB::table('catalogobancos')->insert(['IdBanco' => 3, 'BancoCorto' => 'BANOBRAS', 'Banco' => 'Banco Nacional de Obras y Servicios Públicos, Sociedad Nacional de Crédito, Institución de Banca de Desarrollo']);
        DB::table('catalogobancos')->insert(['IdBanco' => 4, 'BancoCorto' => 'BBVA BANCOMER', 'Banco' => 'BBVA Bancomer, S.A., Institución de Banca Múltiple, Grupo Financiero BBVA Bancomer']);
        DB::table('catalogobancos')->insert(['IdBanco' => 5, 'BancoCorto' => 'SANTANDER', 'Banco' => 'Banco Santander (México), S.A., Institución de Banca Múltiple, Grupo Financiero Santander']);
        DB::table('catalogobancos')->insert(['IdBanco' => 6, 'BancoCorto' => 'BANJERCITO', 'Banco' => 'Banco Nacional del Ejército, Fuerza Aérea y Armada, Sociedad Nacional de Crédito, Institución de Banca de Desarrollo']);
        DB::table('catalogobancos')->insert(['IdBanco' => 7, 'BancoCorto' => 'HSBC', 'Banco' => 'HSBC México, S.A., institución De Banca Múltiple, Grupo Financiero HSBC']);
        DB::table('catalogobancos')->insert(['IdBanco' => 8, 'BancoCorto' => 'BAJIO', 'Banco' => 'Banco del Bajío, S.A., Institución de Banca Múltiple']);
        DB::table('catalogobancos')->insert(['IdBanco' => 9, 'BancoCorto' => 'IXE', 'Banco' => 'IXE Banco, S.A., Institución de Banca Múltiple, IXE Grupo Financiero']);
        DB::table('catalogobancos')->insert(['IdBanco' => 10, 'BancoCorto' => 'INBURSA', 'Banco' => 'Banco Inbursa, S.A., Institución de Banca Múltiple, Grupo Financiero Inbursa']);
        DB::table('catalogobancos')->insert(['IdBanco' => 11, 'BancoCorto' => 'INTERACCIONES', 'Banco' => 'Banco Interacciones, S.A., Institución de Banca Múltiple']);
        DB::table('catalogobancos')->insert(['IdBanco' => 12, 'BancoCorto' => 'MIFEL', 'Banco' => 'Banca Mifel, S.A., Institución de Banca Múltiple, Grupo Financiero Mifel']);
        DB::table('catalogobancos')->insert(['IdBanco' => 13, 'BancoCorto' => 'SCOTIABANK', 'Banco' => 'Scotiabank Inverlat, S.A.']);
        DB::table('catalogobancos')->insert(['IdBanco' => 14, 'BancoCorto' => 'BANREGIO', 'Banco' => 'Banco Regional de Monterrey, S.A., Institución de Banca Múltiple, Banregio Grupo Financiero']);
        DB::table('catalogobancos')->insert(['IdBanco' => 15, 'BancoCorto' => 'INVEX', 'Banco' => 'Banco Invex, S.A., Institución de Banca Múltiple, Invex Grupo Financiero']);
        DB::table('catalogobancos')->insert(['IdBanco' => 16, 'BancoCorto' => 'BANSI', 'Banco' => 'Bansi, S.A., Institución de Banca Múltiple']);
        DB::table('catalogobancos')->insert(['IdBanco' => 17, 'BancoCorto' => 'AFIRME', 'Banco' => 'Banca Afirme, S.A., Institución de Banca Múltiple']);
        DB::table('catalogobancos')->insert(['IdBanco' => 18, 'BancoCorto' => 'BANORTE', 'Banco' => 'Banco Mercantil del Norte, S.A., Institución de Banca Múltiple, Grupo Financiero Banorte']);
        DB::table('catalogobancos')->insert(['IdBanco' => 19, 'BancoCorto' => 'THE ROYAL BANK', 'Banco' => 'The Royal Bank of Scotland México, S.A., Institución de Banca Múltiple']);
        DB::table('catalogobancos')->insert(['IdBanco' => 20, 'BancoCorto' => 'AMERICAN EXPRESS', 'Banco' => 'American Express Bank (México), S.A., Institución de Banca Múltiple']);
        DB::table('catalogobancos')->insert(['IdBanco' => 21, 'BancoCorto' => 'BAMSA', 'Banco' => 'Bank of America México, S.A., Institución de Banca Múltiple, Grupo Financiero Bank of America']);
        DB::table('catalogobancos')->insert(['IdBanco' => 22, 'BancoCorto' => 'TOKYO', 'Banco' => 'Bank of Tokyo-Mitsubishi UFJ (México), S.A.']);
        DB::table('catalogobancos')->insert(['IdBanco' => 23, 'BancoCorto' => 'JP MORGAN', 'Banco' => 'Banco J.P. Morgan, S.A., Institución de Banca Múltiple, J.P. Morgan Grupo Financiero']);
        DB::table('catalogobancos')->insert(['IdBanco' => 24, 'BancoCorto' => 'BMONEX', 'Banco' => 'Banco Monex, S.A., Institución de Banca Múltiple']);
        DB::table('catalogobancos')->insert(['IdBanco' => 25, 'BancoCorto' => 'VE POR MAS', 'Banco' => 'Banco Ve Por Mas, S.A. Institución de Banca Múltiple']);
        DB::table('catalogobancos')->insert(['IdBanco' => 26, 'BancoCorto' => 'ING', 'Banco' => 'ING Bank (México), S.A., Institución de Banca Múltiple, ING Grupo Financiero']);
        DB::table('catalogobancos')->insert(['IdBanco' => 27, 'BancoCorto' => 'DEUTSCHE', 'Banco' => 'Deutsche Bank México, S.A., Institución de Banca Múltiple']);
        DB::table('catalogobancos')->insert(['IdBanco' => 28, 'BancoCorto' => 'CREDIT SUISSE', 'Banco' => 'Banco Credit Suisse (México), S.A. Institución de Banca Múltiple, Grupo Financiero Credit Suisse (México)']);
        DB::table('catalogobancos')->insert(['IdBanco' => 29, 'BancoCorto' => 'AZTECA', 'Banco' => 'Banco Azteca, S.A. Institución de Banca Múltiple.']);
        DB::table('catalogobancos')->insert(['IdBanco' => 30, 'BancoCorto' => 'AUTOFIN', 'Banco' => 'Banco Autofin México, S.A. Institución de Banca Múltiple']);
        DB::table('catalogobancos')->insert(['IdBanco' => 31, 'BancoCorto' => 'BARCLAYS', 'Banco' => 'Barclays Bank México, S.A., Institución de Banca Múltiple, Grupo Financiero Barclays México']);
        DB::table('catalogobancos')->insert(['IdBanco' => 32, 'BancoCorto' => 'COMPARTAMOS', 'Banco' => 'Banco Compartamos, S.A., Institución de Banca Múltiple']);
        DB::table('catalogobancos')->insert(['IdBanco' => 33, 'BancoCorto' => 'BANCO FAMSA', 'Banco' => 'Banco Ahorro Famsa, S.A., Institución de Banca Múltiple']);
        DB::table('catalogobancos')->insert(['IdBanco' => 34, 'BancoCorto' => 'BMULTIVA', 'Banco' => 'Banco Multiva, S.A., Institución de Banca Múltiple, Multivalores Grupo Financiero']);
        DB::table('catalogobancos')->insert(['IdBanco' => 35, 'BancoCorto' => 'ACTINVER', 'Banco' => 'Banco Actinver, S.A. Institución de Banca Múltiple, Grupo Financiero Actinver']);
        DB::table('catalogobancos')->insert(['IdBanco' => 36, 'BancoCorto' => 'WAL-MART', 'Banco' => 'Banco Wal-Mart de México Adelante, S.A., Institución de Banca Múltiple']);
        DB::table('catalogobancos')->insert(['IdBanco' => 37, 'BancoCorto' => 'NAFIN', 'Banco' => 'Nacional Financiera, Sociedad Nacional de Crédito, Institución de Banca de Desarrollo']);
        DB::table('catalogobancos')->insert(['IdBanco' => 38, 'BancoCorto' => 'INTERBANCO', 'Banco' => 'Inter Banco, S.A. Institución de Banca Múltiple']);
        DB::table('catalogobancos')->insert(['IdBanco' => 39, 'BancoCorto' => 'BANCOPPEL', 'Banco' => 'BanCoppel, S.A., Institución de Banca Múltiple']);
        DB::table('catalogobancos')->insert(['IdBanco' => 40, 'BancoCorto' => 'ABC CAPITAL', 'Banco' => 'ABC Capital, S.A., Institución de Banca Múltiple']);
        DB::table('catalogobancos')->insert(['IdBanco' => 41, 'BancoCorto' => 'UBS BANK', 'Banco' => 'UBS Bank México, S.A., Institución de Banca Múltiple, UBS Grupo Financiero']);
        DB::table('catalogobancos')->insert(['IdBanco' => 42, 'BancoCorto' => 'CONSUBANCO', 'Banco' => 'Consubanco, S.A. Institución de Banca Múltiple']);
        DB::table('catalogobancos')->insert(['IdBanco' => 43, 'BancoCorto' => 'VOLKSWAGEN', 'Banco' => 'Volkswagen Bank, S.A., Institución de Banca Múltiple']);
        DB::table('catalogobancos')->insert(['IdBanco' => 44, 'BancoCorto' => 'CIBANCO', 'Banco' => 'CIBanco, S.A.']);
        DB::table('catalogobancos')->insert(['IdBanco' => 45, 'BancoCorto' => 'BBASE', 'Banco' => 'Banco Base, S.A., Institución de Banca Múltiple']);
        DB::table('catalogobancos')->insert(['IdBanco' => 46, 'BancoCorto' => 'BANSEFI', 'Banco' => 'Banco del Ahorro Nacional y Servicios Financieros, Sociedad Nacional de Crédito, Institución de Banca de Desarrollo']);
        DB::table('catalogobancos')->insert(['IdBanco' => 47, 'BancoCorto' => 'HIPOTECARIA FEDERAL', 'Banco' => 'Sociedad Hipotecaria Federal, Sociedad Nacional de Crédito, Institución de Banca de Desarrollo']);
        DB::table('catalogobancos')->insert(['IdBanco' => 48, 'BancoCorto' => 'MONEXCB', 'Banco' => 'Monex Casa de Bolsa, S.A. de C.V. Monex Grupo Financiero']);
        DB::table('catalogobancos')->insert(['IdBanco' => 49, 'BancoCorto' => 'GBM', 'Banco' => 'GBM Grupo Bursátil Mexicano, S.A. de C.V. Casa de Bolsa']);
        DB::table('catalogobancos')->insert(['IdBanco' => 50, 'BancoCorto' => 'MASARI', 'Banco' => 'Masari Casa de Bolsa, S.A.']);
        DB::table('catalogobancos')->insert(['IdBanco' => 51, 'BancoCorto' => 'VALUE', 'Banco' => 'Value, S.A. de C.V. Casa de Bolsa']);
        DB::table('catalogobancos')->insert(['IdBanco' => 52, 'BancoCorto' => 'ESTRUCTURADORES', 'Banco' => 'Estructuradores del Mercado de Valores Casa de Bolsa, S.A. de C.V.']);
        DB::table('catalogobancos')->insert(['IdBanco' => 53, 'BancoCorto' => 'TIBER', 'Banco' => 'Casa de Cambio Tiber, S.A. de C.V.']);
        DB::table('catalogobancos')->insert(['IdBanco' => 54, 'BancoCorto' => 'VECTOR', 'Banco' => 'Vector Casa de Bolsa, S.A. de C.V.']);
        DB::table('catalogobancos')->insert(['IdBanco' => 55, 'BancoCorto' => 'B&B', 'Banco' => 'B y B, Casa de Cambio, S.A. de C.V.']);
        DB::table('catalogobancos')->insert(['IdBanco' => 56, 'BancoCorto' => 'ACCIVAL', 'Banco' => 'Acciones y Valores Banamex, S.A. de C.V., Casa de Bolsa']);
        DB::table('catalogobancos')->insert(['IdBanco' => 57, 'BancoCorto' => 'MERRILL LYNCH', 'Banco' => 'Merrill Lynch México, S.A. de C.V. Casa de Bolsa']);
        DB::table('catalogobancos')->insert(['IdBanco' => 58, 'BancoCorto' => 'FINAMEX', 'Banco' => 'Casa de Bolsa Finamex, S.A. de C.V.']);
        DB::table('catalogobancos')->insert(['IdBanco' => 59, 'BancoCorto' => 'VALMEX', 'Banco' => 'Valores Mexicanos Casa de Bolsa, S.A. de C.V.']);
        DB::table('catalogobancos')->insert(['IdBanco' => 60, 'BancoCorto' => 'UNICA', 'Banco' => 'Unica Casa de Cambio, S.A. de C.V.']);
        DB::table('catalogobancos')->insert(['IdBanco' => 61, 'BancoCorto' => 'MAPFRE', 'Banco' => 'MAPFRE Tepeyac, S.A.']);
        DB::table('catalogobancos')->insert(['IdBanco' => 62, 'BancoCorto' => 'PROFUTURO', 'Banco' => 'Profuturo G.N.P., S.A. de C.V., Afore']);
        DB::table('catalogobancos')->insert(['IdBanco' => 63, 'BancoCorto' => 'CB ACTINVER', 'Banco' => 'Actinver Casa de Bolsa, S.A. de C.V.']);
        DB::table('catalogobancos')->insert(['IdBanco' => 64, 'BancoCorto' => 'OACTIN', 'Banco' => 'OPERADORA ACTINVER, S.A. DE C.V.']);
        DB::table('catalogobancos')->insert(['IdBanco' => 65, 'BancoCorto' => 'SKANDIA', 'Banco' => 'Skandia Vida, S.A. de C.V.']);
        DB::table('catalogobancos')->insert(['IdBanco' => 66, 'BancoCorto' => 'CBDEUTSCHE', 'Banco' => 'Deutsche Securities, S.A. de C.V. CASA DE BOLSA']);
        DB::table('catalogobancos')->insert(['IdBanco' => 67, 'BancoCorto' => 'ZURICH', 'Banco' => 'Zurich Compañía de Seguros, S.A.']);
        DB::table('catalogobancos')->insert(['IdBanco' => 68, 'BancoCorto' => 'ZURICHVI', 'Banco' => 'Zurich Vida, Compañía de Seguros, S.A.']);
        DB::table('catalogobancos')->insert(['IdBanco' => 69, 'BancoCorto' => 'SU CASITA', 'Banco' => 'Hipotecaria Su Casita, S.A. de C.V. SOFOM ENR']);
        DB::table('catalogobancos')->insert(['IdBanco' => 70, 'BancoCorto' => 'CB INTERCAM', 'Banco' => 'Intercam Casa de Bolsa, S.A. de C.V.']);
        DB::table('catalogobancos')->insert(['IdBanco' => 71, 'BancoCorto' => 'CI BOLSA', 'Banco' => 'CI Casa de Bolsa, S.A. de C.V.']);
        DB::table('catalogobancos')->insert(['IdBanco' => 72, 'BancoCorto' => 'BULLTICK CB', 'Banco' => 'Bulltick Casa de Bolsa, S.A., de C.V.']);
        DB::table('catalogobancos')->insert(['IdBanco' => 73, 'BancoCorto' => 'STERLING', 'Banco' => 'Sterling Casa de Cambio, S.A. de C.V.']);
        DB::table('catalogobancos')->insert(['IdBanco' => 74, 'BancoCorto' => 'FINCOMUN', 'Banco' => 'Fincomún, Servicios Financieros Comunitarios, S.A. de C.V.']);
        DB::table('catalogobancos')->insert(['IdBanco' => 75, 'BancoCorto' => 'HDI SEGUROS', 'Banco' => 'HDI Seguros, S.A. de C.V.']);
        DB::table('catalogobancos')->insert(['IdBanco' => 76, 'BancoCorto' => 'ORDER', 'Banco' => 'Order Express Casa de Cambio, S.A. de C.V']);
        DB::table('catalogobancos')->insert(['IdBanco' => 77, 'BancoCorto' => 'AKALA', 'Banco' => 'Akala, S.A. de C.V., Sociedad Financiera Popular']);
        DB::table('catalogobancos')->insert(['IdBanco' => 78, 'BancoCorto' => 'CB JPMORGAN', 'Banco' => 'J.P. Morgan Casa de Bolsa, S.A. de C.V. J.P. Morgan Grupo Financiero']);
        DB::table('catalogobancos')->insert(['IdBanco' => 79, 'BancoCorto' => 'REFORMA', 'Banco' => 'Operadora de Recursos Reforma, S.A. de C.V., S.F.P.']);
        DB::table('catalogobancos')->insert(['IdBanco' => 80, 'BancoCorto' => 'STP', 'Banco' => 'Sistema de Transferencias y Pagos STP, S.A. de C.V.SOFOM ENR']);
        DB::table('catalogobancos')->insert(['IdBanco' => 81, 'BancoCorto' => 'TELECOMM', 'Banco' => 'Telecomunicaciones de México']);
        DB::table('catalogobancos')->insert(['IdBanco' => 82, 'BancoCorto' => 'EVERCORE', 'Banco' => 'Evercore Casa de Bolsa, S.A. de C.V.']);
        DB::table('catalogobancos')->insert(['IdBanco' => 83, 'BancoCorto' => 'SKANDIA', 'Banco' => 'Skandia Operadora de Fondos, S.A. de C.V.']);
        DB::table('catalogobancos')->insert(['IdBanco' => 84, 'BancoCorto' => 'SEGMTY', 'Banco' => 'Seguros Monterrey New York Life, S.A de C.V']);
        DB::table('catalogobancos')->insert(['IdBanco' => 85, 'BancoCorto' => 'ASEA', 'Banco' => 'Solución Asea, S.A. de C.V., Sociedad Financiera Popular']);
        DB::table('catalogobancos')->insert(['IdBanco' => 86, 'BancoCorto' => 'KUSPIT', 'Banco' => 'Kuspit Casa de Bolsa, S.A. de C.V.']);
        DB::table('catalogobancos')->insert(['IdBanco' => 87, 'BancoCorto' => 'SOFIEXPRESS', 'Banco' => 'J.P. SOFIEXPRESS, S.A. de C.V., S.F.P.']);
        DB::table('catalogobancos')->insert(['IdBanco' => 88, 'BancoCorto' => 'UNAGRA', 'Banco' => 'UNAGRA, S.A. de C.V., S.F.P.']);
        DB::table('catalogobancos')->insert(['IdBanco' => 89, 'BancoCorto' => 'OPCIONES EMPRESARIALES DEL NOROESTE', 'Banco' => 'OPCIONES EMPRESARIALES DEL NORESTE, S.A. DE C.V., S.F.P.']);
        DB::table('catalogobancos')->insert(['IdBanco' => 90, 'BancoCorto' => 'CLS', 'Banco' => 'Cls Bank International']);
        DB::table('catalogobancos')->insert(['IdBanco' => 91, 'BancoCorto' => 'INDEVAL', 'Banco' => 'SD. Indeval, S.A. de C.V.']);
        DB::table('catalogobancos')->insert(['IdBanco' => 92, 'BancoCorto' => 'LIBERTAD', 'Banco' => 'Libertad Servicios Financieros, S.A. De C.V.']);
    }
}
