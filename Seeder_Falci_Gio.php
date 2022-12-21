<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;
use App\Models\ArchiveEntity;

class InventarioSumarioDaCamaraMunicipalnoImperioSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */

	const DESCRIPTION_LEVEL_MAP =
		[
			'collection' => 1,
			'fonds' => 2,
			'section' => 3,
			'subsection' => 4,
			'serie' => 5,
			'subserie' => 6,
			'item' => 7,
		];

	public function run()
	{

		$elements = [
			'fonds-1' => [
				'title' => 'Câmara Municipal de Juiz de Fora no Império',
				[
					'section-1' => [
						'title' => 'ÓRGÃOS DO GOVERNO IMPERIAL E PROVINCIAL',
						[
							'subsection-1' => [
								'title' => 'Governo Imperial',
								[
									'serie-1' => [
										'title' => 'CORRESPONDÊNCIA entre o Conselho de Ministros e a Câmara Municipal de Juiz de Fora',
										'description' => 'Quase todos os ofícios são assinados pelo Barão de Cotegipe na qualidade de Presidente do Conselho
										de Ministros',
										'start_date' => \Carbon\Carbon::parse('01-01-1880'),
										'end_date' => \Carbon\Carbon::parse('31-12-1887'),
										[
											'item' => 5,
										],
									],
									'serie-2' => [
										'title' => 'CORRESPONDÊNCIA entre a Diretoria Geral de Estatísticas e a Câmara Municipal de Juiz de Fora',
										'start_date' => \Carbon\Carbon::parse('01-01-1874'),
										'end_date' => \Carbon\Carbon::parse('31-12-1877'),
										[
											'item' => 6,
										],
									],
									'serie-3' => [
										'title' => 'CORRESPONDÊNCIA entre diversos órgãos do Império e a Câmara Municipal de Juiz de Fora.',
										'description' => 'São os seguintes os órgãos: Imperial Instituto Fluminense de Agricultura; Inspetoria Geral de Higiene; Ministério da Marinha; Ministério do Estado dos Negócios da Agricultura; Comércio e Obras Públicas; Ministério dos Negócios da Fazenda; Ministério dos Negócios da Guerra; Ministério dos Negócios do Império; Secretaria de Polícia da Côrte; Relação da Côrte.',
										'start_date' => \Carbon\Carbon::parse('01-01-1856'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 26,
										],
									],
									'serie-4' => [
										'title' => 'CORRESPONDÊNCIA entre a Diretoria da Estrada de Ferro D.Pedro II e a Câmara Municipal de Juiz de Fora.',
										'description' => 'Além de um recibo,contém ainda cópia de correspondência entre a Diretoria da Estrada de Ferro e outras entidades:Ministério dos Negócios da Agricutura e Obras,Chefe do Tráfego.',
										'start_date' => \Carbon\Carbon::parse('01-01-1872'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 32,
										],
									],
									'serie-5' => [
										'title' => 'DOCUMENTOS da Guarda Nacional referentes à Juiz de Fora e outras localidades',
										'description' => 'Contém correspondência e relação de guardas.',
										'start_date' => \Carbon\Carbon::parse('01-01-1858'),
										'end_date' => \Carbon\Carbon::parse('31-12-1878'),
										[
											'item' => 16,
										],
									],
									'serie-6' => [
										'title' => 'CORRESPONDÊNCIA da Câmara Municipal de Juiz de Fora com Senadores e Deputados do Império',
										'start_date' => \Carbon\Carbon::parse('01-01-1864'),
										'end_date' => \Carbon\Carbon::parse('31-12-1888'),
										[
											'item' => 10,
										],
									],
								],
							],
							'subsection-2' => [
								'title' => ' Governo Provincial',
								'description' => 'Presidência da Província de Minas Gerais',
								[
									'serie-7' => [
										'title' => 'CORRESPONDÊNCIA entre a Presidência da Província e a Câmara Municipal de Juiz de Fora,referente a agricultura',
										'start_date' => \Carbon\Carbon::parse('01-01-1861'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 30,
										],
									],
									'serie-8' => [
										'title' => 'CORRESPONDÊNCIA entre a Presidência da Província e a Câmara Municipal de Juiz de Fora,referente à Assembléia Legislativa Provincial.',
										'description' => 'Contém uma proposta da Câmara à Assembléia e informações sobre o funcionamento desta.',
										'start_date' => \Carbon\Carbon::parse('01-01-1863'),
										'end_date' => \Carbon\Carbon::parse('31-12-1882'),
										[
											'item' => 9,
										],
									],
									'serie-9' => [
										'title' => 'CORRESPONDÊNCIA entre a Presidência da Provincia e a Câmara Municipal de Juiz de Fora,referente à assuntos diversos.',
										'description' => 'Contém um ofício enviado pelo Palácio do Governo da Provincia do Espírito Santo à Câmara Municipal de Juiz de Fora e ofício recebido pela Câmara referente à criação de um jardim zoológico na Capital da Província.',
										'start_date' => \Carbon\Carbon::parse('01-01-1854'),
										'end_date' => \Carbon\Carbon::parse('31-12-1888'),
										[
											'item' => 87,
										],
									],
									'serie-10' => [
										'title' => 'CORRESPONDÊNCIA referente a Brinde Nacional (reconhecimento a médico pelo tratamento do Imperador).',
										'description' => 'Contém listas para subscrição popular.',
										'start_date' => \Carbon\Carbon::parse('01-01-1888'),
										'end_date' => \Carbon\Carbon::parse('31-12-1888'),
										[
											'item' => 20,
										],
									],
									'serie-11' => [
										'title' => 'CORRESPONDÊNCIA enviada pela Presidência da Província à Câmara Municipal de Juiz de Fora referente a cultura.',
										'description' => 'Almanak Civil Administrativo e Industrial; Biblioteca Nacional; Museu e Festejos.',
										'start_date' => \Carbon\Carbon::parse('01-01-1861'),
										'end_date' => \Carbon\Carbon::parse('31-12-1887'),
										[
											'item' => 13,
										],
									],
									'serie-12' => [
										'title' => 'CORRESPONDENCIA enviada pela Presidência da Provincia à Câmara Municipal de Juiz de Fora, referente a delegados e sub-delegados de polícia de Juiz de Fora.',
										'start_date' => \Carbon\Carbon::parse('01-01-1859'),
										'end_date' => \Carbon\Carbon::parse('31-12-1887'),
										[
											'item' => 6,
										],
									],
									'serie-13' => [
										'title' => 'CORRESPONDENCIA entre a Presidência da Província e a Câmara Municipal de Juiz de Fora,referentes  às divisas territoriais municipais.',
										'start_date' => \Carbon\Carbon::parse('01-01-1854'),
										'end_date' => \Carbon\Carbon::parse('31-12-1871'),
										[
											'item' => 24,
										],
									],
									'serie-14' => [
										'title' => 'CORRESPONDÊNCIA enviada pela Presidência da Província à Câmara Municipal de Juiz de Fora referente a doações de imóveis (terrenos e prédios).',
										'start_date' => \Carbon\Carbon::parse('01-01-1870'),
										'end_date' => \Carbon\Carbon::parse('31-12-1887'),
										[
											'item' => 5,
										],
									],
									'serie-15' => [
										'title' => 'CORRESPONDÊNCIA entre a Presidência da Província e a Câmara Municipal de Juiz de Fora,referente a eleições.',
										'description' => 'A correspondência refere-se a eleições especiais: Juiz de Paz, vereadores, deputados, senadores, eleições primárias, alistamento de votantes e outros aspectos eleitorais. Ofício enviando a circular que eleva a categoria de “cidade” a Vila de Santo Antônio do Parahybuna-53 lei 759 02-mai-1856.',
										'start_date' => \Carbon\Carbon::parse('01-01-1853'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 267,
										],
									],
									'serie-16' => [
										'title' => 'CORRESPONDÊNCIA enviada pela Presidência da Província à  Câmara Municipal de Juiz de Fora referente ao ensino público.',
										'start_date' => \Carbon\Carbon::parse('01-01-1855'),
										'end_date' => \Carbon\Carbon::parse('31-12-1883'),
										[
											'item' => 17,
										],
									],
									'serie-17' => [
										'title' => 'DOCUMENTOS referentes à escravidão.',
										'description' => 'Além de correspondência enviada pela Presidência da Província à Câmara Municipal de Juiz de Fora,contém o texto da Lei do Ventre Livre (Lei 2040,de 28 de setembro de 1871).',
										'start_date' => \Carbon\Carbon::parse('01-01-1871'),
										'end_date' => \Carbon\Carbon::parse('31-12-1888'),
										[
											'item' => 19,
										],
									],
									'serie-18' => [
										'title' => 'CORRESPONDÊNCIA enviada pela Presidência da Provincia à Câmara Municipal de Juiz de Fora referente a estatística e recenciamento.',
										'start_date' => \Carbon\Carbon::parse('01-01-1860'),
										'end_date' => \Carbon\Carbon::parse('31-12-1885'),
										[
											'item' => 9,
										],
									],
									'serie-19' => [
										'title' => 'CORRESPONDÊNCIA enviada pela Presidência da Provincia e a Câmara Municipal de Juiz de Fora referente às finanças do município.',
										'start_date' => \Carbon\Carbon::parse('01-01-1854'),
										'end_date' => \Carbon\Carbon::parse('31-12-1888'),
										[
											'item' => 58,
										],
									],
									'serie-20' => [
										'title' => 'CORRESPONDÊNCIA enviada pela Presidência da Província à Câmara Municipal de Juiz de Fora referente à Igreja Católica.',
										'start_date' => \Carbon\Carbon::parse('01-01-1855'),
										'end_date' => \Carbon\Carbon::parse('31-12-1887'),
										[
											'item' => 17,
										],
									],
									'serie-21' => [
										'title' => 'CORRESPONDÊNCIA enviada pela Presidência da Província à Câmara Municipal de Juiz de Fora referente a imigração com o objetivo de formação de mão-de-obra.',
										'start_date' => \Carbon\Carbon::parse('01-01-1855'),
										'end_date' => \Carbon\Carbon::parse('31-12-1887'),
										[
											'item' => 9,
										],
									],
									'serie-22' => [
										'title' => 'CORRESPONDÊNCIA enviada pela Presidência da Província à Câmara Municipal de Juiz de Fora referente a aforamentos de terras de índios para a Câmara.',
										'start_date' => \Carbon\Carbon::parse('01-01-1869'),
										'end_date' => \Carbon\Carbon::parse('31-12-1888'),
										[
											'item' => 5,
										],
									],
									'serie-23' => [
										'title' => 'CORRESPONDÊNCIA entre a Presidência da Província e a Câmara Municipal de Juiz de Fora solicitando informações sobre o município de Juiz de Fora.',
										'description' => 'As solicitações referem-se a: agricultura,Cia. União e Indústria, limites territoriais, madeiras, pecuária, rios, etc. A maior parte dos ofícios não receberam respostas da Câmara.',
										'start_date' => \Carbon\Carbon::parse('01-01-1853'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 169,
										],
									],
									'serie-24' => [
										'title' => 'CORESPONDÊNCIA enviada pela Presidência da Província à Câmara Municipal de Juiz de Fora,referente a Juízes de Direito,de Paz,Municipal e de Órfãos.',
										'description' => 'Em alguns documentos sobre Juiz de Paz há também referência a Sub-Delegados.',
										'start_date' => \Carbon\Carbon::parse('01-01-1854'),
										'end_date' => \Carbon\Carbon::parse('31-12-1888'),
										[
											'item' => 92,
										],
									],
									'serie-25' => [
										'title' => 'CORRESPONDÊNCIA enviada pela Presidência da Província à Câmara Municipal de Juiz de Fora referente a legislação provincial e posturas.',
										'description' => 'Contém duas correspondências referentes a projetos aprovados (aditivos de posturas da Câmara) e Lei 480 de 1850.',
										'start_date' => \Carbon\Carbon::parse('01-01-1850'),
										'end_date' => \Carbon\Carbon::parse('31-12-1888'),
										[
											'item' => 43,
										],
									],
									'serie-26' => [
										'title' => 'CORRESPONDÊNCIA enviada pela Presidência da Província à Câmara Municipal de Juiz de Fora referente a licença para linhas telefônicas e casas de negócios.',
										'start_date' => \Carbon\Carbon::parse('01-01-1856'),
										'end_date' => \Carbon\Carbon::parse('31-12-1885'),
										[
											'item' => 8,
										],
									],
									'serie-27' => [
										'title' => 'CORRESPONDÊNCIA enviada pela Presidência da Provincia à Câmara Municipal de Juiz de Fora referente a loteria.',
										'description' => 'Contém decretos referentes a loterias.',
										'start_date' => \Carbon\Carbon::parse('01-01-1862'),
										'end_date' => \Carbon\Carbon::parse('31-12-1888'),
										[
											'item' => 19,
										],
									],
									'serie-28' => [
										'title' => 'CORRESPONDÊNCIA enviada pela Presidência da Província à Câmara Municipal de Juiz de Fora referente à naturalização de estrangeiros.',
										'start_date' => \Carbon\Carbon::parse('01-01-1853'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 6,
										],
									],
									'serie-29' => [
										'title' => 'CORRESPONDÊNCIA entre a Presidência da Província e a Câmara Municipal de Juiz de Fora referente a obras públicas.',
										'start_date' => \Carbon\Carbon::parse('01-01-1854'),
										'end_date' => \Carbon\Carbon::parse('31-12-1887'),
										[
											'item' => 167,
										],
									],
									'serie-30' => [
										'title' => 'CORRESPONDÊNCIA enviada pela Presidência da Província à Câmara Municipal de Juiz de Fora referente a pesos e medidas.',
										'description' => 'Contém referências a adoção do sistema métrico francês.',
										'start_date' => \Carbon\Carbon::parse('01-01-1864'),
										'end_date' => \Carbon\Carbon::parse('31-12-1882'),
										[
											'item' => 20,
										],
									],
									'serie-31' => [
										'title' => 'CORRESPONDÊNCIA entre a Presidência da Província e a Câmara Municipal de Juiz de fora referente ao sustento de presos pobres.',
										'description' => 'Contém cópias de correspondência entre outros órgãos.',
										'start_date' => \Carbon\Carbon::parse('01-01-1859'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 57,
										],
									],
									'serie-32' => [
										'title' => 'CORRESPONDÊNCIA protocolar entre a Presidência da Província e a Câmara Municipal de Juiz de Fora.',
										'description' => 'Contém diversos comunicados e votos de felicitações.',
										'start_date' => \Carbon\Carbon::parse('01-01-1853'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 45,
										],
									],
									'serie-33' => [
										'title' => 'CORRESPONDÊNCIA enviada pela Presidência da Província à Câmara Municipal de Juiz de Fora referente a pedidos de concessões de particulares para a exploração de recursos minerais em Juiz de Fora. Inclusive exploração de petróleo.',
										'start_date' => \Carbon\Carbon::parse('01-01-1883'),
										'end_date' => \Carbon\Carbon::parse('31-12-1887'),
										[
											'item' => 7,
										],
									],
									'serie-34' => [
										'title' => 'CORRESPONDÊNCIA entre a Presidência da Província e a Câmara Municipal de Juiz de Fora referente a saúde pública.',
										'start_date' => \Carbon\Carbon::parse('01-01-1855'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 44,
										],
									],
									'serie-35' => [
										'title' => 'CORRESPONDÊNCIA enviada pela Presidência da Província à Câmara Municipal de Juiz de Fora referente ao serviço militar.',
										'title' => 'Contém convocação para a Guerra do Paraguai.',
										'start_date' => \Carbon\Carbon::parse('01-01-1865'),
										'end_date' => \Carbon\Carbon::parse('31-12-1879'),
										[
											'item' => 29,
										],
									],
								],
							],
							'subsection-3' => [
								'title' => ' Governo Provincial',
								'description' => 'Órgãos Provinciais Diversos',
								[
									'serie-36' => [
										'title' => 'CORRESPONDÊNCIA entre a Assembléia Legislativa Provincial e a Câmara Municipal de Juiz de Fora.',
										'start_date' => \Carbon\Carbon::parse('01-01-1868'),
										'end_date' => \Carbon\Carbon::parse('31-12-1888'),
										[
											'item' => 12,
										],
									],
									'serie-37' => [
										'title' => 'CORRESPONDÊNCIA enviada à Câmara Municipal de Ouro Preto pela Câmara Municipal de Juiz de Fora.',
										'description' => 'Contém informações sobre nomeações de Presidentes e Vice-Presidentes da Província,exposições de 1861-62 e engenheiros.',
										'start_date' => \Carbon\Carbon::parse('01-01-1861'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 36,
										],
									],
									'serie-38' => [
										'title' => 'CORRESPONDÊNCIA entre a Comissão de Vacinação e a Câmara Municipal de Juiz de Fora.',
										'start_date' => \Carbon\Carbon::parse('01-01-1858'),
										'end_date' => \Carbon\Carbon::parse('31-12-1871'),
										[
											'item' => 8,
										],
									],
									'serie-39' => [
										'title' => 'CORRESPONDÊNCIA enviada pela Administração Geral dos Correios da Província à Câmara Municipal de Juiz de Fora.',
										'start_date' => \Carbon\Carbon::parse('01-01-1865'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 8,
										],
									],
									'serie-40' => [
										'title' => 'CORRESPONDÊNCIA entre Deputados Provinciais e a Câmara Municipal de Juiz de Fora.',
										'start_date' => \Carbon\Carbon::parse('01-01-1858'),
										'end_date' => \Carbon\Carbon::parse('31-12-1886'),
										[
											'item' => 13,
										],
									],
									'serie-41' => [
										'title' => 'CORRESPONDÊNCIA entre a Diretoria da Fazenda Provincial de Minas Gerais e a Câmara Municipal de Juiz de Fora.',
										'description' => 'A correspondência refere-se a loteria,alimentação de presos pobres, coletoria e outros assuntos.',
										'start_date' => \Carbon\Carbon::parse('01-01-1881'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 27,
										],
									],
									'serie-42' => [
										'title' => 'CORRESPONDÊNCIA enviada pela Diretoria de Instrução Pública à Câmara Municipal de Juiz de Fora.',
										'start_date' => \Carbon\Carbon::parse('01-01-1867'),
										'end_date' => \Carbon\Carbon::parse('31-12-1883'),
										[
											'item' => 5,
										],
									],
									'serie-43' => [
										'title' => 'CORRESPONDÊNCIA entre a Diretoria Geral de Obras Públicas e a Câmara Municipal de Juiz de Fora.',
										'start_date' => \Carbon\Carbon::parse('01-01-1857'),
										'end_date' => \Carbon\Carbon::parse('31-12-1888'),
										[
											'item' => 162,
										],
									],
									'serie-44' => [
										'title' => 'CORRESPONDÊNCIA entre a Inspetoria de Saúde Pública e a Câmara Municipal de Juiz de Fora.',
										'start_date' => \Carbon\Carbon::parse('01-01-1858'),
										'end_date' => \Carbon\Carbon::parse('31-12-1885'),
										[
											'item' => 24,
										],
									],
									'serie-45' => [
										'title' => 'CORRESPONDÊNCIA entre a Mesa de Rendas Provinciais e a Câmara Municipal de Juiz de Fora.',
										'description' => 'Refere-se a despesas de presos pobres,pagamento de obras,casas de negócios e outros assuntos.',
										'start_date' => \Carbon\Carbon::parse('01-01-1853'),
										'end_date' => \Carbon\Carbon::parse('31-12-1874'),
										[
											'item' => 102,
										],
									],
									'serie-46' => [
										'title' => 'CORRESPONDÊNCIA enviada pela Secretaria da Polícia de Ouro Preto à Câmara Municipal de Juiz de Fora.',
										'start_date' => \Carbon\Carbon::parse('01-01-1858'),
										'end_date' => \Carbon\Carbon::parse('31-12-1887'),
										[
											'item' => 7,
										],
									],
									'serie-47' => [
										'title' => 'CORRESPONDÊNCIA entre a Secretaria da Presidência da Província e a Câmara Municipal de Juiz de Fora.',
										'description' => 'Refere-se a agricultura, eleições, Juiz de Direito, Juiz de Órfãos, Juiz de Paz, Juiz Municipal, leis,Promotor Público, sustento de presos pobres e outros assuntos.',
										'start_date' => \Carbon\Carbon::parse('01-01-1853'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 265,
										],
									],
									'serie-48' => [
										'title' => 'CORRESPONDÊNCIA entre a Tesouraria da Fazenda e a Câmara Municipal de Juiz de Fora.',
										'start_date' => \Carbon\Carbon::parse('01-01-1853'),
										'end_date' => \Carbon\Carbon::parse('31-12-1886'),
										[
											'item' => 99,
										],
									],
									'serie-49' => [
										'title' => 'CORRESPONDÊNCIA enviada pela Repartição de Terras Públicas à Câmara Municipal de Juiz de Fora.',
										'start_date' => \Carbon\Carbon::parse('01-01-1858'),
										'end_date' => \Carbon\Carbon::parse('31-12-1858'),
										[
											'item' => 2,
										],
									],
									'serie-50' => [
										'title' => 'CORRESPONDÊNCIA enviada pela Inspetoria Especial de Terras e Colonização à Câmara Municipal de Juiz de Fora,referente a varíola.',
										'start_date' => \Carbon\Carbon::parse('01-01-1889'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 7,
										],
									],
								],
							],
							'subsection-3' => [
								'title' => ' Órgãos e Funcionários Localizados em Juiz de Fora',
								[
									'serie-51' => [
										'title' => 'PROCURAÇÕES do Cartório de Sarandy, referentes a bens imóveis, cobranças, escravos, heranças, hipotecas, inventários, etc.',
										'start_date' => \Carbon\Carbon::parse('01-01-1875'),
										'end_date' => \Carbon\Carbon::parse('31-12-1878'),
										[
											'item' => 183,
										],
									],
									'serie-52' => [
										'title' => 'DOCUMENTOS de diversos cartórios de Juiz de Fora,incluindo os distritos de Rosário, São Pedro de Alcântara, Chapéu d’Uvas e outros.',
										'description' => 'Contém uma escritura de compra e venda de escravos de 1884 e um livro de registros do cartório de Chapéu d’Uvas (1843-1849),um livro de procurações do cartório de Juiz de Fora (1878-1879) e uma escritura de compra e venda de um terreno (1889).',
										'start_date' => \Carbon\Carbon::parse('01-01-1843'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 22,
										],
									],
									'serie-53' => [
										'title' => 'DOCUMENTOS referentes a censos realizados no município de Juiz de Fora.',
										'description' => 'Inclui listas de famílias e uma relação nominal de proprietários de casas na cidade de Juiz de Fora. Os censos são realizados pelo Juiz de Paz (várias listas de famílias estão sem data).',
										'start_date' => \Carbon\Carbon::parse('01-01-1854'),
										'end_date' => \Carbon\Carbon::parse('31-12-1883'),
										[
											'item' => 75,
										],
									],
									'serie-54' => [
										'title' => 'MAPAS da população e listas de famílias referentes a censos realizados nos distritos de Juiz de Fora.',
										'description' => 'Contém um documento relacionando  as principais atividades econômicas do distrito de Chapéu d’Uvas.Os censos são realizados pelo Juiz de Paz. (Várias listas sem data).',
										'start_date' => \Carbon\Carbon::parse('01-01-1854'),
										'end_date' => \Carbon\Carbon::parse('31-12-1877'),
										[
											'item' => 212,
										],
									],
									'serie-55' => [
										'title' => 'DOCUMENTOS referentes ao Delegado de Polícia de Juiz de Fora.',
										'start_date' => \Carbon\Carbon::parse('01-01-1856'),
										'end_date' => \Carbon\Carbon::parse('31-12-1886'),
										[
											'item' => 73,
										],
										[
											'subserie-55.1' => [
												'title' => 'Documentos enviados à Câmara Municipal de Juiz de Fora por diversos delegados de polícia do município.',
												'start_date' => \Carbon\Carbon::parse('01-01-1866'),
												'end_date' => \Carbon\Carbon::parse('31-12-1886'),
												[
													'item' => 55,
												],
											],
											'subserie-55.2' => [
												'title' => 'Documentos recebidos por delegados de polícia de Juiz de Fora.',
												'start_date' => \Carbon\Carbon::parse('01-01-1861'),
												'end_date' => \Carbon\Carbon::parse('31-12-1877'),
												[
													'item' => 12,
												],
											],
											'subserie-55.3' => [
												'title' => 'Documentos diversos referentes a delegados de polícia de Juiz de Fora, incluindo editais.',
												'start_date' => \Carbon\Carbon::parse('01-01-1859'),
												'end_date' => \Carbon\Carbon::parse('31-12-1870'),
												[
													'item' => 6,
												],
											],
										],
									],
									'serie-56' => [
										'title' => 'DOCUMENTOS referentes a subdelegados de polícia de Juiz de Fora.',
										'start_date' => \Carbon\Carbon::parse('01-01-1853'),
										'end_date' => \Carbon\Carbon::parse('31-12-1884'),
										[
											'item' => 97,
										],
										[
											'subserie-56.1' => [
												'title' => 'Correspondência enviada por subdelegados à câmara de Juiz de Fora.',
												'start_date' => \Carbon\Carbon::parse('01-01-1853'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 70,
												],
											],
											'subserie-56.2' => [
												'title' => 'Documentos diversos referentes a subdelegados de polícia de Juiz de Fora, incluindo editais.',
												'start_date' => \Carbon\Carbon::parse('01-01-1853'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 27,
												],
											],
										],
									],
									'serie-57' => [
										'title' => 'DOCUMENTOS referentes a eleições realizadas em Juiz de Fora.',
										'start_date' => \Carbon\Carbon::parse('01-01-1853'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 251,
										],
										[
											'subserie-57.1' => [
												'title' => 'Correspondência enviada à Câmara de Juiz de Fora pelas juntas de Qualificação de Votantes e Mesas Paroquiais referentes a eleições e qualificação de votantes,incluindo ata de eleições nos vários distritos.',
												'start_date' => \Carbon\Carbon::parse('01-01-1854'),
												'end_date' => \Carbon\Carbon::parse('31-12-1882'),
												[
													'item' => 221,
												],
											],
											'subserie-57.2' => [
												'title' => 'Documentos diversos referentes a eleições.Contém carta denunciando fraude eleitoral.',
												'start_date' => \Carbon\Carbon::parse('01-01-1857'),
												'end_date' => \Carbon\Carbon::parse('31-12-1882'),
												[
													'item' => 21,
												],
											],
										],
									],
									'serie-58' => [
										'title' => 'DOCUMENTOS do Escrivão de Paz de Juiz de Fora.',
										'start_date' => \Carbon\Carbon::parse('01-01-1853'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 158,
										],
										[
											'subserie-58.1' => [
												'title' => 'Comunicados enviados à Câmara Municipal de Juiz de Fora pelo Escrivão de Paz,referentes à infração de posturas municipais.',
												'start_date' => \Carbon\Carbon::parse('01-01-1854'),
												'end_date' => \Carbon\Carbon::parse('31-12-1887'),
												[
													'item' => 10,
												],
											],
											'subserie-58.2' => [
												'title' => 'Documentos diversos do Escrivão de Paz de Juiz de Fora.',
												'start_date' => \Carbon\Carbon::parse('01-01-1857'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 17,
												],
											],
										],
									],
									'serie-59' => [
										'title' => 'DOCUMENTOS referentes à Igreja Católica em Juiz de Fora.',
										'start_date' => \Carbon\Carbon::parse('01-01-1854'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 61,
										],
										[
											'subserie-59.1' => [
												'title' => 'Documentos referentes a atestados de residência de padres.',
												'start_date' => \Carbon\Carbon::parse('01-01-1854'),
												'end_date' => \Carbon\Carbon::parse('31-12-1880'),
												[
													'item' => 17,
												],
											],
											'subserie-59.2' => [
												'title' => 'Documentos referentes a Cemitérios.',
												'start_date' => \Carbon\Carbon::parse('01-01-1856'),
												'end_date' => \Carbon\Carbon::parse('31-12-1887'),
												[
													'item' => 12,
												],
											],
											'subserie-59.3' => [
												'title' => 'Correspondência sobre assuntos diversos envolvendo a Igreja.',
												'start_date' => \Carbon\Carbon::parse('01-01-1855'),
												'end_date' => \Carbon\Carbon::parse('31-12-1887'),
												[
													'item' => 16,
												],
											],
											'subserie-59.4' => [
												'title' => 'Correspondência recebida de padres referentes aos livros de nascimento e óbitos de filhos livres de mulher escrava.',
												'start_date' => \Carbon\Carbon::parse('01-01-1875'),
												'end_date' => \Carbon\Carbon::parse('31-12-1875'),
												[
													'item' => 4,
												],
											],
											'subserie-59.5' => [
												'title' => 'Documentos referentes a irmandades.',
												'start_date' => \Carbon\Carbon::parse('01-01-1874'),
												'end_date' => \Carbon\Carbon::parse('31-12-1888'),
												[
													'item' => 6,
												],
											],
											'subserie-59.6' => [
												'title' => 'Documentos referentes a concessão de verbas para a Igreja.',
												'description' => 'Contém um livro de despesas da construção da Igreja Matriz Chapéu d’Uvas,feito pelo “fabriqueiro” da mesma,ao Juiz da Provedoria (1847-1873).',
												'start_date' => \Carbon\Carbon::parse('01-01-1847'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 8,
												],
											],
										],
									],
									'serie-60' => [
										'title' => 'DOCUMENTOS referentes a órgãos arrecadadores de impostos extra-municipais recolhidos em Juiz de Fora.',
										'start_date' => \Carbon\Carbon::parse('01-01-1853'),
										'end_date' => \Carbon\Carbon::parse('31-12-1887'),
										[
											'item' => 115,
										],
										[
											'subserie-60.1' => [
												'title' => 'Documentos enviados pelo Coletor à Câmara referentes a diversos assuntos.',
												'start_date' => \Carbon\Carbon::parse('01-01-1853'),
												'end_date' => \Carbon\Carbon::parse('31-12-1887'),
												[
													'item' => 10,
												],
											],
											'subserie-60.2' => [
												'title' => 'Balancetes da Recebedoria de Iriceira.',
												'start_date' => \Carbon\Carbon::parse('01-01-1855'),
												'end_date' => \Carbon\Carbon::parse('31-12-1861'),
												[
													'item' => 74,
												],
											],
											'subserie-60.3' => [
												'title' => 'Documentos diversos referentes à Recebedoria de Impostos.',
												'start_date' => \Carbon\Carbon::parse('01-01-1853'),
												'end_date' => \Carbon\Carbon::parse('31-12-1887'),
												[
													'item' => 31,
												],
											],
										],
									],
									'serie-61' => [
										'title' => 'DOCUMENTOS referentes ao Juiz de Direito de Juiz de Fora.',
										'start_date' => \Carbon\Carbon::parse('01-01-1853'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 159,
										],
										[
											'subserie-61.1' => [
												'title' => 'Correspondência enviada ao Juiz de Direito.',
												'start_date' => \Carbon\Carbon::parse('01-01-1871'),
												'end_date' => \Carbon\Carbon::parse('31-12-1880'),
												[
													'item' => 21,
												],
											],
											'subserie-61.2' => [
												'title' => 'Correspondência enviada pelo Juiz de Direito ao Presidente da Câmara Municipal de Juiz de Fora.',
												'start_date' => \Carbon\Carbon::parse('01-01-1854'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 52,
												],
											],
											'subserie-61.3' => [
												'title' => 'Relação dos Jurados multados pelo Juiz de Direito.Contém uma lista dos jurados sortiados para participar da sessão do Juri de 1853.',
												'start_date' => \Carbon\Carbon::parse('01-01-1853'),
												'end_date' => \Carbon\Carbon::parse('31-12-1888'),
												[
													'item' => 66,
												],
											],
											'subserie-61.4' => [
												'title' => 'Requerimento de alívio de multa por não comparecimento às sessões do Juri.',
												'start_date' => \Carbon\Carbon::parse('01-01-1874'),
												'end_date' => \Carbon\Carbon::parse('31-12-1880'),
												[
													'item' => 19,
												],
											],
											'subserie-61.5' => [
												'title' => 'Documentos referentes a quantias depositadas junto ao Procurador da Câmara em decorrência de ordem judicial.',
												'start_date' => \Carbon\Carbon::parse('01-01-1884'),
												'end_date' => \Carbon\Carbon::parse('31-12-1884'),
												[
													'item' => 1,
												],
											],
										],
									],
									'serie-62' => [
										'title' => 'DOCUMENTOS do Juiz Municipal e de Órfãos de Juiz de Fora.',
										'start_date' => \Carbon\Carbon::parse('01-01-1853'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 113,
										],
										[
											'subserie-62.1' => [
												'title' => 'Correspondência enviada pelo Juiz Municipal e de órfãos ao Presidente da Câmara',
												'start_date' => \Carbon\Carbon::parse('01-01-1871'),
												'end_date' => \Carbon\Carbon::parse('31-12-1880'),
												[
													'item' => 97,
												],
											],
											'subserie-62.2' => [
												'title' => 'Documentos enviados ao Juiz Municipal e de Órfãos. Contém um processo crime, com depoimento de um escravo.',
												'start_date' => \Carbon\Carbon::parse('01-01-1854'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 16,
												],
											],
										],
									],
									'serie-63' => [
										'title' => 'DOCUMENTOS do Juiz de Paz de Juiz de Fora.',
										'start_date' => \Carbon\Carbon::parse('01-01-1883'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 317,
										],
										[
											'subserie-63.1' => [
												'title' => 'Documentos enviados pelo Juiz de Paz à Câmara referente a diversos assuntos',
												'start_date' => \Carbon\Carbon::parse('01-01-1853'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 41,
												],
											],
											'subserie-63.2' => [
												'title' => 'Documentos enviados pelo Juiz de Paz à Câmara em resposta a ofícios ou circulares',
												'start_date' => \Carbon\Carbon::parse('01-01-1855'),
												'end_date' => \Carbon\Carbon::parse('31-12-1882'),
												[
													'item' => 28,
												],
											],
											'subserie-63.3' => [
												'title' => 'Documentos diversos enviados ao Juiz de Paz.',
												'start_date' => \Carbon\Carbon::parse('01-01-1854'),
												'end_date' => \Carbon\Carbon::parse('31-12-1888'),
												[
													'item' => 54,
												],
											],
											'subserie-63.4' => [
												'title' => 'Correspondência enviada pelo Juiz de Paz ao Presidente da Câmara referente à sucessão de cargo de Juiz de Paz',
												'content' => 'Contém duas relações de Juiz de Paz nos diversos distritos.',
												'start_date' => \Carbon\Carbon::parse('01-01-1855'),
												'end_date' => \Carbon\Carbon::parse('31-12-1888'),
												[
													'item' => 50,
												],
											],
											'subserie-63.5' => [
												'title' => 'Procurações para posse no cargo de Juiz de Paz.',
												'start_date' => \Carbon\Carbon::parse('01-01-1854'),
												'end_date' => \Carbon\Carbon::parse('31-12-1887'),
												[
													'item' => 144,
												],
											],
										],
									],
									'serie-64' => [
										'title' => 'DOCUMENTOS referente à Justiça em Juiz de Fora.',
										'start_date' => \Carbon\Carbon::parse('01-01-1854'),
										'end_date' => \Carbon\Carbon::parse('31-12-1884'),
										[
											'item' => 59,
										],
										[
											'subserie-64.1' => [
												'title' => 'Diplomas de Juiz de Paz e Juiz de Direito.',
												'start_date' => \Carbon\Carbon::parse('01-01-1878'),
												'end_date' => \Carbon\Carbon::parse('31-12-1880'),
												[
													'item' => 7,
												],
											],
											'subserie-64.2' => [
												'title' => 'Documentos diversos referentes à justiça em Juiz de Fora.',
												'start_date' => \Carbon\Carbon::parse('01-01-1856'),
												'end_date' => \Carbon\Carbon::parse('31-12-1884'),
												[
													'item' => 26,
												],
											],
											'subserie-64.3' => [
												'title' => 'Editais diversos,especialmente referentes à posse nos cargos de Juiz de Direito,Juiz Municipal e Juiz de Paz.',
												'start_date' => \Carbon\Carbon::parse('01-01-1854'),
												'end_date' => \Carbon\Carbon::parse('31-12-1886'),
												[
													'item' => 13,
												],
											],
											'subserie-64.4' => [
												'title' => 'Documentos do Escrivão do Juri.Contém uma correspondência do Contado do Juizo.',
												'start_date' => \Carbon\Carbon::parse('01-01-1856'),
												'end_date' => \Carbon\Carbon::parse('31-12-1873'),
												[
													'item' => 3,
												],
											],
											'subserie-64.5' => [
												'title' => 'Correspondência enviada pelo Promotor Público à Câmara Municipal de Juiz de Fora.',
												'start_date' => \Carbon\Carbon::parse('01-01-1855'),
												'end_date' => \Carbon\Carbon::parse('31-12-1874'),
												[
													'item' => 10,
												],
											],
										],
									],
								],
							],
						],
					],
					'section-2' => [
						'title' => 'ADMINISTRAÇÃO MUNICIPAL',
						[
							'subsection-1' => [
								'title' => 'SECRETARIA DA CÂMARA',
								[
									'serie-122' => [
										'title' => 'REQUERIMENTOS de particulares reclamando sobre bueiros, canais , valetas, pedindo construção e supressão de outros.',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1859'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 51,
										],
									],
									'serie-123' => [
										'title' => 'REQUERIMENTOS solicitando à Câmara providências em relação a caminhos diversos ( abertura, conservação, fechamento, mudança)',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1854'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 124,
										],
										[
											'subserie-123.1' => [
												'title' => 'Requerimentos relativos à abertura de caminhos à servidão pública.',
												'start_date' => \Carbon\Carbon::parse('01-01-1859'),
												'end_date' => \Carbon\Carbon::parse('31-12-1884'),
												[
													'item' => 19,
												],
											],
											'subserie-123.2' => [
												'title' => ' Requerimentos contendo reclamações sobre o estado de má conservação de caminhos.',
												'start_date' => \Carbon\Carbon::parse('01-01-1862'),
												'end_date' => \Carbon\Carbon::parse('31-12-1883'),
												[
													'item' => 9,
												],
											],
											'subserie-123.3' => [
												'title' => 'Requerimentos de fechamento de caminhos sem uso ou de díficil acesso.',
												'start_date' => \Carbon\Carbon::parse('01-01-1857'),
												'end_date' => \Carbon\Carbon::parse('31-12-1888'),
												[
													'item' => 29,
												],
											],
											'subserie-123.4' => [
												'title' => 'Requerimentos solicitando mudança de localização e traçado de caminhos públicos.',
												'start_date' => \Carbon\Carbon::parse('01-01-1874'),
												'end_date' => \Carbon\Carbon::parse('31-12-1887'),
												[
													'item' => 12,
												],
											],
											'subserie-123.5' => [
												'title' => '- Requerimentos contendo reclamações contra particulares devido a obstrução, fechamento e abertura de caminhos.',
												'start_date' => \Carbon\Carbon::parse('01-01-1857'),
												'end_date' => \Carbon\Carbon::parse('31-12-1887'),
												[
													'item' => 28,
												],
											],
											'subserie-123.6' => [
												'title' => ' Requerimentos diversos sobre caminhos. Contém alguns pareceres sobre reclamações de particulares.',
												'start_date' => \Carbon\Carbon::parse('01-01-1854'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 28,
												],
											]
										]
									],
									'serie-124' => [
										'title' => 'REQUERIMENTOS referentes à contrução e reparos de chafarizes.',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1853'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 37,
										],
										[
											'subserie-124.1' => [
												'title' => 'Requerimentos referentes a nascentes de água e diversos.',
												'start_date' => \Carbon\Carbon::parse('01-01-1853'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 16,
												],
											],
											'subserie-124.2' => [
												'title' => 'Requerimentos solicitando a colocação de chafarizes nas ruas de Juiz de Fora.',
												'start_date' => \Carbon\Carbon::parse('01-01-1881'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 10,
												],
											],
											'subserie-124.3' => [
												'title' => 'Requerimentos solicitando providências contra a obstrução de chafarizes por particulares.',
												'start_date' => \Carbon\Carbon::parse('01-01-1857'),
												'end_date' => \Carbon\Carbon::parse('31-12-1880'),
												[
													'item' => 11,
												],
											]
										]
									],
									'serie-125' => [
										'title' => 'REQUERIMENTOS contendo reclamações e solicitando providências em relação a fiscais e agentes fiscais.',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1860'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 15,
										]
									],
									'serie-126' => [
										'title' => 'REQUERIMENTOS solicitando a colocação de lampiões de iluminação pública nas ruas da cidade.',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1873'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 10,
										]
									],
									'serie-127' => [
										'title' => 'REQUERIMENTOS contendo reclamações sobre impostos e solicitando sua redução ou alívio de multas.',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1861'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 85,
										],
										[
											'subserie-127.1' => [
												'title' => 'Requerimentos referentes a impostos.',
												'start_date' => \Carbon\Carbon::parse('01-01-1887'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 22,
												],
											],
											'subserie-127.2' => [
												'title' => 'Requerimentos solicitando alívio de multas.',
												'start_date' => \Carbon\Carbon::parse('01-01-1861'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 63,
												],
											]
										]
									],
									'serie-128' => [
										'title' => 'REQUERIMENTOS solicitando licença para abertura, continuação e baixa de negócios, exercício da profissão e obras. Contém também denúncias de falta de licenças.',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1855'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 155,
										],
										[
											'subserie-128.1' => [
												'title' => 'Requerimentos solicitando licença para abertura de boticas e farmácias.',
												'start_date' => \Carbon\Carbon::parse('01-01-1857'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 9,
												],
											],
											'subserie-128.2' => [
												'title' => 'Requerimentos solicitando licença para abertura de casas de negócios ( secos e molhados, sapataria, ferraria, etc).',
												'start_date' => \Carbon\Carbon::parse('01-01-1855'),
												'end_date' => \Carbon\Carbon::parse('31-12-1857'),
												[
													'item' => 34,
												],
											],


											'subserie-128.3' => [
												'title' => 'Requerimentos solicitando baixa nas licenças para casas de negócios.',
												'start_date' => \Carbon\Carbon::parse('01-01-1876'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 12,
												],
											]
											,
											'subserie-128.4' => [
												'title' => 'Requerimentos contendo reclamações referentes a licenças para abertura de negócios e exercícios de profissões',
												'start_date' => \Carbon\Carbon::parse('01-01-1858'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 7,
												],
											]
											,
											'subserie-128.5' => [
												'title' => 'Requerimentos solicitando licenças diversas.',
												'start_date' => \Carbon\Carbon::parse('01-01-1868'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 17,
												],
											]
											,
											'subserie-128.6' => [
												'title' => 'Requerimentos solicitando licença para a execução de obras por particulares',
												'start_date' => \Carbon\Carbon::parse('01-01-1860'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 47,
												],
											]
											,
											'subserie-128.7' => [
												'title' => 'Requerimentos solicitando licença para conduzir veículos.',
												'start_date' => \Carbon\Carbon::parse('01-01-1870'),
												'end_date' => \Carbon\Carbon::parse('31-12-1887'),
												[
													'item' => 27,
												],
											]
										]
									]
								],
								'serie-129' => [
									'title' => 'REQUERIMENTOS referentes a naturalização de estrangeiros.',
									'description' => '',
									'start_date' => \Carbon\Carbon::parse('01-01-1858'),
									'end_date' => \Carbon\Carbon::parse('31-12-1874'),
									[
										'item' => 10,
									]
								],
								'serie-130' => [
									'title' => ' REQUERIMENTOS solicitando a concessão de pena dágua.',
									'description' => '',
									'start_date' => \Carbon\Carbon::parse('01-01-1887'),
									'end_date' => \Carbon\Carbon::parse('31-12-1889'),
									[
										'item' => 128,
									]
								],
								'serie-131' => [
									'title' => 'REQUERIMENTOS referentes à construção e reforma de pontes e pontilhões.',
									'description' => '',
									'start_date' => \Carbon\Carbon::parse('01-01-1864'),
									'end_date' => \Carbon\Carbon::parse('31-12-1889'),
									[
										'item' => 23,
									]
								],
								'serie-132' => [
									'title' => 'REQUERIMENTOS contendo reclamações e solicitando a abertura, construção e nivelamento de ruas de Juiz de Fora.',
									'description' => '',
									'start_date' => \Carbon\Carbon::parse('01-01-1854'),
									'end_date' => \Carbon\Carbon::parse('31-12-1889'),
									[
										'item' => 79,
									],
									[
										'subserie-132.1' => [
											'title' => ' Requerimento solicitando a abertura, conclusão e manutenção da largura atual de ruas.',
											'start_date' => \Carbon\Carbon::parse('01-01-1863'),
											'end_date' => \Carbon\Carbon::parse('31-12-1889'),
											[
												'item' => 21,
											],
										],
										'subserie-132.2' => [
											'title' => 'Requerimentos contendo reclamações e solicitando o calçamento de ruas e outros.',
											'start_date' => \Carbon\Carbon::parse('01-01-1876'),
											'end_date' => \Carbon\Carbon::parse('31-12-1883'),
											[
												'item' => 9,
											],
										],
										'subserie-132.3' => [
											'title' => 'Requerimentos contendo reclamações sobre o estado de conservação de ruas e pedindo providências.',
											'start_date' => \Carbon\Carbon::parse('01-01-1870'),
											'end_date' => \Carbon\Carbon::parse('31-12-1888'),
											[
												'item' => 16,
											],
										],
										'subserie-132.4' => [
											'title' => 'Requerimentos solicitando nivelamento e alinhamento de ruas e passeios.',
											'start_date' => \Carbon\Carbon::parse('01-01-1854'),
											'end_date' => \Carbon\Carbon::parse('31-12-1889'),
											[
												'item' => 33,
											],
										]
									]
								],
								'serie-133' => [
									'title' => 'REQUERIMENTOS diversos.',
									'description' => '',
									'start_date' => \Carbon\Carbon::parse('01-01-1854'),
									'end_date' => \Carbon\Carbon::parse('31-12-1889'),
									[
										'item' => 176,
									]
								]
							],
							'subsection-2' => [
								'title' => 'Governo Imperial',
								[
									'serie-124' => [
										'title' => '',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1853'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 37,
										]
									],
									'serie-124' => [
										'title' => '',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1853'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 37,
										]
									],
									'serie-124' => [
										'title' => '',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1853'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 37,
										]
									],
									'serie-124' => [
										'title' => '',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1853'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 37,
										]
									],
									'serie-124' => [
										'title' => '',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1853'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 37,
										]
									],
								]
							],

							'subsection-2' => [
								'title' => 'Requerimentos',
								[
									'serie-134' => [
										'title' => 'CORRESPONDÊNCIA expedida pelo Secretário da Câmara Municipal de Juiz de Fora.',
										'start_date' => \Carbon\Carbon::parse('01-01-1856'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 68,
										],
										[
											'subserie-134.1' => [
												'title' => 'Correspondência expedida pelo Secretário da Câmara ao Presidente da mesma.',
												'start_date' => \Carbon\Carbon::parse('01-01-1856'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 55,
												],
											],
											'subserie-134.2' => [
												'title' => 'Correspondência expedida pelo Secretário da Câmara aos Vereadores.',
												'start_date' => \Carbon\Carbon::parse('01-01-1864'),
												'end_date' => \Carbon\Carbon::parse('31-12-1888'),
												[
													'item' => 12,
												],
											],
											'subserie-134.3' => [
												'title' => 'Correspondência expedida pelo Secretário da Câmara a particulares.',
												'start_date' => \Carbon\Carbon::parse('01-01-1864'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 6,
												],
											],
										],
									],
									'serie-135' => [
										'title' => 'CORRESPONDÊNCIA (rascunhos ) expedida pelo Secretário da Câmara a diversos destinatários. Contém diversos documentos sobre o cólera.',
										'start_date' => \Carbon\Carbon::parse('01-01-1853'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 68,
										],
									],
									'serie-136' => [
										'title' => 'LIVRO de registro de cópias de correspondência expedida pela Câmara. O livro está danificado e sem encadernação. Está incompleto, começando na página 10. Em um dos documentos há solicitação de medidas para prospecção de petróleo em Juiz de Fora.',
										'start_date' => \Carbon\Carbon::parse('01-01-1869'),
										'end_date' => \Carbon\Carbon::parse('31-12-1887'),
										[
											'item' => 68,
										],
									],
									'serie-137' => [
										'title' => 'CORRESPONDÊNCIA recebida pelo Secretário da Câmara enviada por diversos remetentes.',
										'start_date' => \Carbon\Carbon::parse('01-01-1856'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 68,
										],
										[
											'subserie-137.1' => [
												'title' => 'Correspondência enviada pelo Fiscal e Agente Fiscal ao Secretário da Câmara.',
												'start_date' => \Carbon\Carbon::parse('01-01-1857'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 55,
												],
											],
											'subserie-137.2' => [
												'title' => 'Correspondência enviada por particulares ao Secretário da Câmara.',
												'start_date' => \Carbon\Carbon::parse('01-01-1856'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 12,
												],
											],
											'subserie-137.3' => [
												'title' => 'Correspondência do Presidente da Câmara ao Secretário. Contém documentos relativos a eleições, juízes, limpeza pública, nomeações para cargos públicos, obras públicas, saúde pública, vereadores, etc. Contém ainda uma nomeação para o cargo de Secretário.',
												'start_date' => \Carbon\Carbon::parse('01-01-1857'),
												'end_date' => \Carbon\Carbon::parse('31-12-1887'),
												[
													'item' => 6,
												],
											],
										],
									],
									'serie-138' => [
										'title' => 'RECIBOS de entrega de ofícios e livros referentes a eleições e qualificação de votantes, enviados pela Câmara Municipal.',
										'start_date' => \Carbon\Carbon::parse('01-01-1853'),
										'end_date' => \Carbon\Carbon::parse('31-12-1881'),
										[
											'item' => 68,
										],
									]
								],
							],
						],
					],
					'section-3' => [
						'title' => 'COMISSÕES DA CÂMARA DE VEREADORES',
						[
							'subsection-3' => [
								'title' => 'COMISSÕES DA CÂMARA DE VEREADORES',
								[
									'serie-139' => [
										'title' => 'DOCUMENTOS da Comissão de Censos.',
										'start_date' => \Carbon\Carbon::parse('01-01-1855'),
										'end_date' => \Carbon\Carbon::parse('31-12-1861'),
										[
											'item' => 68,
										],
									],
									'serie-140' => [
										'title' => 'DOCUMENTOS de Comissões especiais.',
										'description' => 'Trata-se de comissões de caráter não permanente, nomeadas especialmente para exame e parecer sobre
										assuntos específicos.',
										'start_date' => \Carbon\Carbon::parse('01-01-1853'),
										'end_date' => \Carbon\Carbon::parse('31-12-1888'),
										[
											'item' => 68,
										],
										[
											'subserie-140.1' => [
												'title' => 'Documentos contendo nomeação de comissões especiais e a aquiescência de seus membros.
												Contém um documento da comissão para alistamento de voluntários para a guerra do Paraguai
												( 1865 ) .',
												'start_date' => \Carbon\Carbon::parse('01-01-1855'),
												'end_date' => \Carbon\Carbon::parse('31-12-1888'),
												[
													'item' => 55,
												],
											],
											'subserie-140.2' => [
												'title' => 'Pareceres de comissões especiais sobre assuntos diversos.',
												'start_date' => \Carbon\Carbon::parse('01-01-1853'),
												'end_date' => \Carbon\Carbon::parse('31-12-1888'),
												[
													'item' => 12,
												],
											]
										],
									],
									'serie-141' => [
										'title' => 'DOCUMENTOS da Comissão de Fazenda.',
										'start_date' => \Carbon\Carbon::parse('01-01-1857'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 68,
										],
										[
											'subserie-141.1' => [
												'title' => 'Documentos diversos da Comissão de Fazenda.',
												'start_date' => \Carbon\Carbon::parse('01-01-1857'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 55,
												],
											],
											'subserie-141.2' => [
												'title' => 'Pareceres da Comissão de Fazenda sobre assuntos diversos. Referentes a aumento de ordenado, contas da Câmara ( ano financeiro ), custos, despesas com epidemias, emendas, obras, pagamentos ( farmacêuticos, credores da exposição, etc. ) , projetos ( de orçamentos e posturas) e outros assuntos.',
												'start_date' => \Carbon\Carbon::parse('01-01-1857'),
												'end_date' => \Carbon\Carbon::parse('31-12-1887'),
												[
													'item' => 12,
												],
											],
											'subserie-141.3' => [
												'title' => 'Pareceres da comissão de Fazenda sobre custos judiciais.',
												'start_date' => \Carbon\Carbon::parse('01-01-1883'),
												'end_date' => \Carbon\Carbon::parse('31-12-1887'),
												[
													'item' => 6,
												],
											],
										],
									],
									'serie-142' => [
										'title' => 'OCUMENTOS da Comissão de Legislação.',
										'description' => 'Contém pareceres sobre diversos assuntos: Código de Posturas, epidemias, impostos, pagamento de custos, obras públicas ( abastecimento de água, estradas, etc. ) e outros assuntos.',
										'start_date' => \Carbon\Carbon::parse('01-01-1864'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 68,
										],
									],
									'serie-143' => [
										'title' => 'DOCUMENTOS da Comissão de Obras Públicas.',
										'start_date' => \Carbon\Carbon::parse('01-01-1855'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 68,
										],
										[
											'subserie-143.1' => [
												'title' => 'Documentos referentes a pareceres sobre consultas do Alinhador à Comissão de Obras Públicas.',
												'start_date' => \Carbon\Carbon::parse('01-01-1857'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 55,
												],
											],
											'subserie-143.2' => [
												'title' => 'Documentos da Comissão de Obras Públicas referentes a obras na Cadeia. Contém um parecer
												da comissão sobre um ofício enviado pelo Delegado de Polícia, referente ao sustento de presos
												pobres.',
												'start_date' => \Carbon\Carbon::parse('01-01-1855'),
												'end_date' => \Carbon\Carbon::parse('31-12-1882'),
												[
													'item' => 12,
												],
											],
											'subserie-143.3' => [
												'title' => 'Documento da Comissão de Obras Públicas referentes a obras no Cemitério.',
												'start_date' => \Carbon\Carbon::parse('01-01-1855'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 6,
												],
											],
											'subserie-143.4' => [
												'title' => 'Pareceres da Comissão de Obras Públicas sobre relatórios de Fiscais.',
												'start_date' => \Carbon\Carbon::parse('01-01-1858'),
												'end_date' => \Carbon\Carbon::parse('31-12-1887'),
												[
													'item' => 6,
												],
											],
											'subserie-143.5' => [
												'title' => 'Documentos da Comissão de Obras Públicas sobre orçamentos para a execução de obras
												diversas.',
												'start_date' => \Carbon\Carbon::parse('01-01-1855'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 6,
												],
											],
											'subserie-143.6' => [
												'title' => 'Pareceres da Comissão de Obras Públicas sobre obras em vias públicas, pontes e pontilhões.',
												'start_date' => \Carbon\Carbon::parse('01-01-1855'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 6,
												],
											],
											'subserie-143.7' => [
												'title' => 'Pareceres da Comissão de Obras Públicas sobre assuntos diversos.',
												'start_date' => \Carbon\Carbon::parse('01-01-1856'),
												'end_date' => \Carbon\Carbon::parse('31-12-1887'),
												[
													'item' => 6,
												],
											],
											'subserie-143.8' => [
												'title' => 'Documentos diversos da Comissão de Obras Públicas.',
												'start_date' => \Carbon\Carbon::parse('01-01-1853'),
												'end_date' => \Carbon\Carbon::parse('31-12-1883'),
												[
													'item' => 6,
												],
											],
										],
									],
									'serie-144' => [
										'title' => 'DOCUMENTOS da Comissão de Polícia Municipal.',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1861'),
										'end_date' => \Carbon\Carbon::parse('31-12-1884'),
										[
											'item' => 68,
										],
										[
											'subserie-144.1' => [
												'title' => 'Pareceres da Comissão de Polícia Municipal sobre petições.',
												'start_date' => \Carbon\Carbon::parse('01-01-1872'),
												'end_date' => \Carbon\Carbon::parse('31-12-1886'),
												[
													'item' => 55,
												],
											],
											'subserie-144.2' => [
												'title' => 'Pareceres da Comissão de Polícia Municipal sobre relatórios de Fiscais.',
												'start_date' => \Carbon\Carbon::parse('01-01-1865'),
												'end_date' => \Carbon\Carbon::parse('31-12-1883'),
												[
													'item' => 12,
												],
											],
											'subserie-144.3' => [
												'title' => 'Pareceres da Comissão de Polícia Municipal sobre assuntos diversos.',
												'start_date' => \Carbon\Carbon::parse('01-01-1861'),
												'end_date' => \Carbon\Carbon::parse('31-12-1884'),
												[
													'item' => 6,
												],
											],
										],
									],

									'serie-145' => [
										'title' => 'DOCUMENTOS da Comissão de Saúde Pública.',
										'start_date' => \Carbon\Carbon::parse('01-01-1855'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 68,
										],
									],
									'serie-146' => [
										'title' => 'DOCUMENTOS da Comissão de Subscrição de Fundos para fins diversos.',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1859'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 68,
										],
										[
											'subserie-146.1' => [
												'title' => 'Documentos contendo recusa em compor a Comissão de Subscrição.',
												'start_date' => \Carbon\Carbon::parse('01-01-1859'),
												'end_date' => \Carbon\Carbon::parse('31-12-1884'),
												[
													'item' => 55,
												],
											],
											'subserie-146.2' => [
												'title' => 'Documentos diversos da Comissão de Subscrição.',
												'start_date' => \Carbon\Carbon::parse('01-01-1854'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 12,
												],
											]
										],
									],
								]
							],
							'subsection-4' => [
								'title' => 'INDICAÇÕES APRESENTADAS EM SESSÕES DA CÂMARA',
								[
									'serie-147' => [
										'title' => 'INDICAÇÕES referentes a adiamento de sessões da Câmara.',
										'start_date' => \Carbon\Carbon::parse('01-01-1883'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 68,
										],
									],
									'serie-148' => [
										'title' => 'INDICAÇÕES contendo agradecimentos, felicitações e votos de louvor.',
										'start_date' => \Carbon\Carbon::parse('01-01-1857'),
										'end_date' => \Carbon\Carbon::parse('31-12-1888'),
										[
											'item' => 68,
										],
									],
									'serie-149' => [
										'title' => 'INDICAÇÕES referentes à Cadeia.',
										'start_date' => \Carbon\Carbon::parse('01-01-1858'),
										'end_date' => \Carbon\Carbon::parse('31-12-1883'),
										[
											'item' => 68,
										],
									],
									'serie-150' => [
										'title' => 'INDICAÇÕES referentes a concorrência para obras diversas.',
										'start_date' => \Carbon\Carbon::parse('01-01-1884'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 68,
										],
									],
									'serie-151' => [
										'title' => 'INDICAÇÕES referentes a eleições diversas.',
										'start_date' => \Carbon\Carbon::parse('01-01-1865'),
										'end_date' => \Carbon\Carbon::parse('31-12-1887'),
										[
											'item' => 68,
										],
									],
									'serie-152' => [
										'title' => 'INDICAÇÕES referentes ao ensino público.',
										'start_date' => \Carbon\Carbon::parse('01-01-1860'),
										'end_date' => \Carbon\Carbon::parse('31-12-1887'),
										[
											'item' => 68,
										],
									],
									'serie-153' => [
										'title' => 'INDICAÇÕES referentes a nomeação para diversos cargos municipais.',
										'start_date' => \Carbon\Carbon::parse('01-01-1853'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 68,
										],
									],
									'serie-154' => [
										'title' => 'INDICAÇÕES referentes ao Matadouro Municipal.',
										'start_date' => \Carbon\Carbon::parse('01-01-1856'),
										'end_date' => \Carbon\Carbon::parse('31-12-1878'),
										[
											'item' => 68,
										],
									],
									'serie-155' => [
										'title' => 'INDICAÇÕES referentes à construção da Praça do Mercado Municipal.',
										'start_date' => \Carbon\Carbon::parse('01-01-1857'),
										'end_date' => \Carbon\Carbon::parse('31-12-1874'),
										[
											'item' => 68,
										],
									],
									'serie-156' => [
										'title' => 'INDICAÇÕES referentes a diversas obras públicas. Inclui a Estrada de Ferro D. Pedro II, cadeia, cemitério, etc.',
										'start_date' => \Carbon\Carbon::parse('01-01-1855'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 68,
										],
									],
									'serie-157' => [
										'title' => 'INDICAÇÕES referentes a denominação de ruas e praças de Juiz de Fora.',
										'start_date' => \Carbon\Carbon::parse('01-01-1870'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 68,
										],
									],
									'serie-158' => [
										'title' => 'INDICAÇÕES referentes à saúde pública.',
										'start_date' => \Carbon\Carbon::parse('01-01-1855'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 68,
										],
									],
									'serie-159' => [
										'title' => 'INDICAÇÕES referentes a verbas dispendidas com o Presidente e o Procurador da Câmara de Juiz de Fora.',
										'start_date' => \Carbon\Carbon::parse('01-01-1857'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 68,
										],
									],
									'serie-160' => [
										'title' => 'INDICAÇÕES diversas.',
										'start_date' => \Carbon\Carbon::parse('01-01-1854'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 68,
										],
									],
								]
							],
							'subsection-5' => [
								'title' => 'REQUERIMENTOS E PROPOSTAS DE VEREADORES',
								[
									'serie-161' => [
										'title' => 'REQUERIMENTOS de vereadores apresentados em sessões da Câmara de Juiz de Fora.',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1857'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 68,
										],
										[
											'subserie-161.1' => [
												'title' => 'Requerimentos de vereadores referentes a diversos assuntos.',
												'start_date' => \Carbon\Carbon::parse('01-01-1857'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 55,
												],
											],
											'subserie-161.2' => [
												'title' => 'Requerimentos de vereadores referentes a obras públicas.',
												'start_date' => \Carbon\Carbon::parse('01-01-1857'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 12,
												],
											],

										],
									],
									'serie-162' => [
										'title' => 'PROPOSTAS apresentadas por vereadores em sessões da Câmara de Juiz de Fora.',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1853'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 68,
										],
										[
											'subserie-162.1' => [
												'title' => 'Propostas apresentadas por vereadores referentes a assuntos diversos.',
												'start_date' => \Carbon\Carbon::parse('01-01-1854'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 55,
												],
											],
											'subserie-162.2' => [
												'title' => 'Propostas apresentadas por vereadores, referentes a admissão e demissão de funcionários da
												            Câmara.',
												'start_date' => \Carbon\Carbon::parse('01-01-1853'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 12,
												],
											],
											'subserie-162.3' => [
												'title' => 'Propostas apresentadas por vereadores referentes a obras públicas.',
												'start_date' => \Carbon\Carbon::parse('01-01-1857'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 6,
												],
											],
										],
									],
								]
							],
							'subsection-6' => [
								'title' => 'OUTROS DOCUMENTOS DE VEREADORES',
								[
									'serie-163' => [
										'title' => 'DOCUMENTOS referentes a posturas municipais.',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1853'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 68,
										],
										[
											'subserie-163.1' => [
												'title' => 'Documentos referentes ao Código de Posturas municipais.
												Contém projetos de código de posturas e outros documentos, inclusive o texto impresso do
												Código de Posturas de 1860.',
												'start_date' => \Carbon\Carbon::parse('01-01-1857'),
												'end_date' => \Carbon\Carbon::parse('31-12-1863'),
												[
													'item' => 55,
												],
											],
											'subserie-163.2' => [
												'title' => 'Documentos contendo emendas adicionais, substitutivas e supressivas referentes a artigos e
												parágrafos do Código de Posturas.',
												'start_date' => \Carbon\Carbon::parse('01-01-1857'),
												'end_date' => \Carbon\Carbon::parse('31-12-1887'),
												[
													'item' => 12,
												],
											],
											'subserie-163.3' => [
												'title' => 'Documentos referentes a propostas de artigos adicionais às Posturas Municipais. Estas
												propostas foram aprovadas pela Câmara.',
												'start_date' => \Carbon\Carbon::parse('01-01-1853'),
												'end_date' => \Carbon\Carbon::parse('31-12-1889'),
												[
													'item' => 6,
												],
											],
										],
									],
									'serie-164' => [
										'title' => 'ATAS ( rascunhos ) de sessões da Câmara Municipal de Juiz de Fora.',
										'start_date' => \Carbon\Carbon::parse('01-01-1857'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 68,
										],
									],
									'serie-165' => [
										'title' => 'CARTAS de vereadores ao Presidente da Câmara de Juiz de Fora justificando ausência a sessões da Câmara. Algumas cartas estão sem data. Não há cartas referentes a ausência no ano de 1880.',
										'start_date' => \Carbon\Carbon::parse('01-01-1853'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 68,
										],
									],
									'serie-166' => [
										'title' => 'CONVOCAÇÕES de vereadores para sessões da Câmara. Inclui quatro confirmações de comparecimento.',
										'start_date' => \Carbon\Carbon::parse('01-01-1854'),
										'end_date' => \Carbon\Carbon::parse('31-12-1878'),
										[
											'item' => 68,
										],
									],
									'serie-167' => [
										'title' => 'DOCUMENTOS diversos referentes a sessões da Câmara de Vereadores.',
										'start_date' => \Carbon\Carbon::parse('01-01-1857'),
										'end_date' => \Carbon\Carbon::parse('31-12-1889'),
										[
											'item' => 68,
										],
									],
									'serie-168' => [
										'title' => 'CORRESPONDÊNCIA entre a Câmara de Juiz de Fora e Vereadores.',
										'description' => '',
										'start_date' => \Carbon\Carbon::parse('01-01-1857'),
										'end_date' => \Carbon\Carbon::parse('31-12-1888'),
										[
											'item' => 68,
										],
										[
											'subserie-168.1' => [
												'title' => 'Correspondência referente à posse no cargo de vereador.',
												'start_date' => \Carbon\Carbon::parse('01-01-1865'),
												'end_date' => \Carbon\Carbon::parse('31-12-1888'),
												[
													'item' => 55,
												],
											],
											'subserie-168.2' => [
												'title' => 'Correspondência apresentando justificativas para não assumir o cargo de vereador .',
												'start_date' => \Carbon\Carbon::parse('01-01-1857'),
												'end_date' => \Carbon\Carbon::parse('31-12-1888'),
												[
													'item' => 12,
												],
											]
										],
									],
								]
							],
						],
					],
					'section-4' => [
						'title' => 'ENTIDADES PRIVADAS',
						[
							'serie-169' => [
								'title' => 'DOCUMENTOS referentes a Bancos.',
								'description' => 'Contém correspondência enviadas à Câmara pelos seguintes bancos: Banco do Brasil (1885-1888, 29
								ítens ); Banco Territorial e Mercantil de Minas (1888, 1 ítem ); José de Souza Lima e Cia.; com casa
								bancária (1870, 1 ítem) e 37 ações do Banco Del Credere, de 1887.',
								'start_date' => \Carbon\Carbon::parse('01-01-1870'),
								'end_date' => \Carbon\Carbon::parse('31-12-1888'),
								[
									'item' => 68,
								],
							],
							'serie-170' => [
								'title' => 'DOCUMENTOS referentes à Cia. Ferro Carril Bonde de Juiz de Fora.',
								'start_date' => \Carbon\Carbon::parse('01-01-1880'),
								'end_date' => \Carbon\Carbon::parse('31-12-1882'),
								[
									'item' => 68,
								],
							],
							'serie-171' => [
								'title' => 'DOCUMENTOS referentes à iluminação elétrica em Juiz de Fora sob a responsabilidade da Cia. Mineira de Eletricidade.',
								'start_date' => \Carbon\Carbon::parse('01-01-1883'),
								'end_date' => \Carbon\Carbon::parse('31-12-1889'),
								[
									'item' => 68,
								],
							],
							'serie-172' => [
								'title' => 'CORRESPONDÊNCIA enviada pela Cia. Telefônica do Brasil à Câmara de Juiz de Fora, referente
								a colocação de postes na cidade. Contém documentos de 1889 referentes à disputa da telefônica com
								a Cia. Mineira de Eletricidade devido à instalação da primeira.',
								'start_date' => \Carbon\Carbon::parse('01-01-1883'),
								'end_date' => \Carbon\Carbon::parse('31-12-1889'),
								[
									'item' => 68,
								],
							],
							'serie-173' => [
								'title' => 'DOCUMETOS referentes à Cia. União Indústria.',
								'description' => 'Contém correspondência entre a Cia. e a Câmara referente a diversos assuntos: pontes, oferecimentos
								de serviços ( epidemia ), plantas, multas e orçamento, além de uma escritura de compra de bens pela
								Cia. Há também documentos referentes à Escola Agrícola 1a União Indústria.',
								'start_date' => \Carbon\Carbon::parse('01-01-1854'),
								'end_date' => \Carbon\Carbon::parse('31-12-1885'),
								[
									'item' => 68,
								],
							],
							'serie-174' => [
								'title' => 'CORRESPONDÊNCIA enviada pela Cia. União Mineira à Câmara Municipal de Juiz de Fora.',
								'description' => 'A correspondência encaminha relatórios anuais de trabalho da Cia., que não estão em anexo.',
								'start_date' => \Carbon\Carbon::parse('01-01-1878'),
								'end_date' => \Carbon\Carbon::parse('31-12-1882'),
								[
									'item' => 68,
								],
							],
							'serie-175' => [
								'title' => 'CORRESPONDÊNCIA enviada à Câmara de Juiz de Fora por diversos estabelecimentos comerciais.',
								'start_date' => \Carbon\Carbon::parse('01-01-1884'),
								'end_date' => \Carbon\Carbon::parse('31-12-1888'),
								[
									'item' => 68,
								],
							],
							'serie-176' => [
								'title' => 'CORRESPONDÊNCIA enviada à Câmara de Juiz de Fora por diversos jornais.',
								'description' => 'Os jornais são os seguintes: Correio de Juiz de Fora, Diário de Minas, Gazeta da Tarde, Gazeta de Juiz de Fora, O Pharol, Província de Minas e outros. As cartas referem-se principalmente à publicação do expediente da Câmara.',
								'start_date' => \Carbon\Carbon::parse('01-01-1865'),
								'end_date' => \Carbon\Carbon::parse('31-12-1889'),
								[
									'item' => 68,
								],
							],
							'serie-177' => [
								'title' => 'CORRESPONDÊNCIA enviada à Câmara de Juiz de Fora por diversas entidades.',
								'description' => 'Contém correspondência da Associação de Imigração, Associação Industrial, Club de Engenharia, Colégio Abílio ( de Barbacena ), Cia Zootécnica e Agrícola do Brasil, Sociedade União dos Fabricantes de Bebidas e outros produtos nacionais, Sociedade de Medicina e Cirurgia de Juiz de Fora, Club da Lavoura e Comércio, Cia. Industrial Mineira.',
								'start_date' => \Carbon\Carbon::parse('01-01-1881'),
								'end_date' => \Carbon\Carbon::parse('31-12-1889'),
								[
									'item' => 68,
								],
							],
						],
					],
					'section-5' => [
						'title' => 'Seção DOCUMENTOS DE TERCEIROS',
						[
							'serie-178' => [
								'title' => 'DOCUMENTOS de terceiros.',
								'description' => 'Contém correspondência do escravo Jeromano Gomes ao Secretário da Câmara, pedindo para ser por ele comprado ( sem data ) etc.',
								'start_date' => \Carbon\Carbon::parse('01-01-1864'),
								'end_date' => \Carbon\Carbon::parse('31-12-1888'),
								[
									'item' => 68,
								],
							]
						],
					],
				],
			],
		];

		$this->saveMap($elements);
	}

	private function saveMap($data, ?int $parentEntityId = null)
	{
		foreach ($data as $dataKey => $dataContent) {
			if ($dataKey == 'item') {
				$itemCounter = 1;
				do {
					$archiveEntity = new ArchiveEntity();
					$archiveEntity->title = 'Item ' . $itemCounter;
					$archiveEntity->description_level_id = self::DESCRIPTION_LEVEL_MAP['item'];
					$archiveEntity->parent_entity_id = $parentEntityId;
					$archiveEntity->save();
					$itemCounter++;
					$dataContent--;
				} while ($dataContent != 0);
			} else {
				$archiveEntity = new ArchiveEntity();
				$archiveEntity->save();

				foreach ($dataContent as $contentKey => $contentValue) {
					if (\is_string($contentKey)) {
						$attributeName = preg_replace('/[0-9]+|[-.]/', '', $contentKey);
						$attributeNumber = preg_replace('/[a-zA-Z]|[-.]/', '', $contentKey);
						$archiveEntity->$attributeName = $contentValue;
					} else {
						$this->saveMap($contentValue, $archiveEntity->id);
					}
				}
				$descriptionLevel = preg_replace('/[0-9]+|[-.]/', '', $dataKey);
				$attributeNumber = preg_replace('/[a-zA-Z]|[-.]/', '', $dataKey);
				$archiveEntity->description_level_id = self::DESCRIPTION_LEVEL_MAP[$descriptionLevel];
				$archiveEntity->parent_entity_id = $parentEntityId;
				$archiveEntity->save();
			}
		}

	}

}
