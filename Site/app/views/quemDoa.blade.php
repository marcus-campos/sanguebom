@extends('blank')

<style>
	.titulo {color:red; font-weight: 700;}
</style>

@section('content')
	<h4 class="titulo">Requisitos básicos para doação de sangue</h4>

	<strong>Requisitos básicos</strong>
	<ul>
		<li>Estar em boas condições de saúde.</li>
		<li>Ter entre 16 e 69 anos, desde que a primeira doação tenha sido feita até 60 anos (menores de 18 anos, clique para ver documentos necessários e formulário de autorização).</li>
		<li>Pesar no mínimo 50kg.</li>
		<li>Estar descansado (ter dormido pelo menos 6 horas nas últimas 24 horas).</li>
		<li>Estar alimentado (evitar alimentação gordurosa nas 4 horas que antecedem a doação).</li>
		<li>Apresentar documento original com foto emitido por órgão oficial (Carteira de Identidade, Cartão de Identidade de Profissional Liberal, Carteira de Trabalho e Previdência Social).</li>
	</ul>

	<b>Impedimentos temporários</b>
	<ul>
		<li>Resfriado: aguardar 7 dias após desaparecimento dos sintomas.</li>
		<li>Gravidez</li>
		<li>90 dias após parto normal e 180 dias após cesariana.</li>
		<li>Amamentação (se o parto ocorreu há menos de 12 meses).</li>
		<li>Ingestão de bebida alcoólica nas 12 horas que antecedem a doação.</li>
		<li> Tatuagem nos últimos 12 meses.</li>
		<li> Situações nas quais há maior risco de adquirir doenças sexualmente transmissíveis: aguardar 12 meses.</li>
		<li>Acre, Amapá, Amazonas, Rondônia, Roraima, Maranhão, Mato Grosso, Pará e Tocantins são estados onde há alta prevalência de malária. Quem esteve nesses estados deve aguardar 12 meses.</li>

	</ul>

	<b>Impedimentos definitivos</b>
	<ul>
		<li>Hepatite após os 11 anos de idade. *</li>
		<li>Evidência clínica ou laboratorial das seguintes doenças infecciosas transmissíveis pelo sangue: Hepatites B e C, AIDS (vírus HIV), doenças associadas aos vírus HTLV I e II e Doença de Chagas.</li>
		<li>Uso de drogas ilícitas injetáveis.</li>
		<li>Malária</li>
	</ul>
	*Hepatite após o 11º aniversário: Recusa Definitiva; Hepatite B ou C após ou antes dos 10 anos: Recusa definitiva; Hepatite por Medicamento: apto após a cura e avaliado clinicamente; Hepatite viral (A): após os 11 anos de idade, se trouxer o exame do diagnóstico da doença, será avaliado pelo médico da triagem.
@stop