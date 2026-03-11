<?php

/*
 * Generated from Grammar.g4 by ANTLR 4.13.2
 */

namespace {
	use Antlr\Antlr4\Runtime\Atn\ATN;
	use Antlr\Antlr4\Runtime\Atn\ATNDeserializer;
	use Antlr\Antlr4\Runtime\Atn\ParserATNSimulator;
	use Antlr\Antlr4\Runtime\Dfa\DFA;
	use Antlr\Antlr4\Runtime\Error\Exceptions\FailedPredicateException;
	use Antlr\Antlr4\Runtime\Error\Exceptions\NoViableAltException;
	use Antlr\Antlr4\Runtime\PredictionContexts\PredictionContextCache;
	use Antlr\Antlr4\Runtime\Error\Exceptions\RecognitionException;
	use Antlr\Antlr4\Runtime\RuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\TokenStream;
	use Antlr\Antlr4\Runtime\Vocabulary;
	use Antlr\Antlr4\Runtime\VocabularyImpl;
	use Antlr\Antlr4\Runtime\RuntimeMetaData;
	use Antlr\Antlr4\Runtime\Parser;

	final class GrammarParser extends Parser
	{
		public const T__0 = 1, T__1 = 2, T__2 = 3, T__3 = 4, T__4 = 5, T__5 = 6, 
               T__6 = 7, T__7 = 8, T__8 = 9, T__9 = 10, T__10 = 11, T__11 = 12, 
               T__12 = 13, T__13 = 14, T__14 = 15, T__15 = 16, T__16 = 17, 
               T__17 = 18, T__18 = 19, T__19 = 20, T__20 = 21, T__21 = 22, 
               T__22 = 23, T__23 = 24, T__24 = 25, T__25 = 26, T__26 = 27, 
               T__27 = 28, T__28 = 29, T__29 = 30, T__30 = 31, T__31 = 32, 
               T__32 = 33, T__33 = 34, T__34 = 35, T__35 = 36, T__36 = 37, 
               T__37 = 38, T__38 = 39, T__39 = 40, T__40 = 41, T__41 = 42, 
               T__42 = 43, T__43 = 44, T__44 = 45, T__45 = 46, T__46 = 47, 
               T__47 = 48, T__48 = 49, T__49 = 50, T__50 = 51, T__51 = 52, 
               T__52 = 53, T__53 = 54, FLOAT = 55, INT = 56, ID = 57, STRING = 58, 
               LINE_COMMENT = 59, MULTI_COMMENT = 60, RUNE = 61, WS = 62;

		public const RULE_p = 0, RULE_stmt = 1, RULE_block = 2, RULE_elseStmt = 3, 
               RULE_switchStmt = 4, RULE_caseStmt = 5, RULE_defaultStmt = 6, 
               RULE_type = 7, RULE_arrayType = 8, RULE_e = 9, RULE_logic = 10, 
               RULE_andExpr = 11, RULE_eq = 12, RULE_ineq = 13, RULE_add = 14, 
               RULE_prod = 15, RULE_unary = 16, RULE_arrayRow = 17, RULE_primary = 18, 
               RULE_params = 19, RULE_param = 20, RULE_returnSpec = 21, 
               RULE_returnType = 22, RULE_args = 23, RULE_idList = 24;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'p', 'stmt', 'block', 'elseStmt', 'switchStmt', 'caseStmt', 'defaultStmt', 
			'type', 'arrayType', 'e', 'logic', 'andExpr', 'eq', 'ineq', 'add', 'prod', 
			'unary', 'arrayRow', 'primary', 'params', 'param', 'returnSpec', 'returnType', 
			'args', 'idList'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, "'print'", "'fmt.Println'", "'('", "')'", "'var'", "'='", "'const'", 
		    "':='", "'+='", "'-='", "'*='", "'/='", "'++'", "'if'", "'for'", "';'", 
		    "'continue'", "'break'", "'return'", "'func'", "'['", "']'", "'{'", 
		    "'}'", "'else'", "'switch'", "'case'", "':'", "'default'", "'int32'", 
		    "'float32'", "'bool'", "'rune'", "'string'", "'*'", "'[]'", "'||'", 
		    "'&&'", "'=='", "'>'", "'<'", "'>='", "'<='", "'!='", "'+'", "'-'", 
		    "'/'", "'%'", "'!'", "','", "'true'", "'false'", "'nil'", "'&'"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
		    null, null, null, null, null, null, null, null, null, null, null, 
		    null, null, null, null, null, null, null, null, null, null, null, 
		    null, null, null, null, null, null, null, null, null, null, null, 
		    null, null, null, null, null, null, null, null, null, null, null, 
		    null, null, null, null, null, null, null, null, null, null, null, 
		    "FLOAT", "INT", "ID", "STRING", "LINE_COMMENT", "MULTI_COMMENT", "RUNE", 
		    "WS"
		];

		private const SERIALIZED_ATN =
			[4, 1, 62, 424, 2, 0, 7, 0, 2, 1, 7, 1, 2, 2, 7, 2, 2, 3, 7, 3, 2, 4, 
		    7, 4, 2, 5, 7, 5, 2, 6, 7, 6, 2, 7, 7, 7, 2, 8, 7, 8, 2, 9, 7, 9, 
		    2, 10, 7, 10, 2, 11, 7, 11, 2, 12, 7, 12, 2, 13, 7, 13, 2, 14, 7, 
		    14, 2, 15, 7, 15, 2, 16, 7, 16, 2, 17, 7, 17, 2, 18, 7, 18, 2, 19, 
		    7, 19, 2, 20, 7, 20, 2, 21, 7, 21, 2, 22, 7, 22, 2, 23, 7, 23, 2, 
		    24, 7, 24, 1, 0, 5, 0, 52, 8, 0, 10, 0, 12, 0, 55, 9, 0, 1, 0, 1, 
		    0, 1, 1, 1, 1, 1, 1, 3, 1, 62, 8, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 
		    3, 1, 69, 8, 1, 1, 1, 1, 1, 3, 1, 73, 8, 1, 1, 1, 1, 1, 1, 1, 1, 1, 
		    1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 
		    1, 1, 1, 1, 1, 1, 1, 1, 3, 1, 94, 8, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 
		    1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 
		    1, 1, 1, 1, 1, 1, 1, 3, 1, 115, 8, 1, 1, 1, 1, 1, 1, 1, 1, 1, 3, 1, 
		    121, 8, 1, 1, 1, 1, 1, 3, 1, 125, 8, 1, 1, 1, 1, 1, 1, 1, 1, 1, 3, 
		    1, 131, 8, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 4, 1, 139, 8, 1, 
		    11, 1, 12, 1, 140, 1, 1, 1, 1, 1, 1, 3, 1, 146, 8, 1, 1, 2, 1, 2, 
		    5, 2, 150, 8, 2, 10, 2, 12, 2, 153, 9, 2, 1, 2, 1, 2, 1, 3, 1, 3, 
		    1, 3, 1, 4, 1, 4, 1, 4, 1, 4, 5, 4, 164, 8, 4, 10, 4, 12, 4, 167, 
		    9, 4, 1, 4, 3, 4, 170, 8, 4, 1, 4, 1, 4, 1, 5, 1, 5, 1, 5, 1, 5, 5, 
		    5, 178, 8, 5, 10, 5, 12, 5, 181, 9, 5, 1, 6, 1, 6, 1, 6, 5, 6, 186, 
		    8, 6, 10, 6, 12, 6, 189, 9, 6, 1, 7, 1, 7, 1, 7, 1, 7, 1, 7, 1, 7, 
		    1, 7, 1, 7, 1, 7, 3, 7, 200, 8, 7, 1, 8, 1, 8, 1, 8, 4, 8, 205, 8, 
		    8, 11, 8, 12, 8, 206, 1, 8, 1, 8, 1, 9, 1, 9, 1, 10, 1, 10, 1, 10, 
		    1, 10, 1, 10, 1, 10, 5, 10, 219, 8, 10, 10, 10, 12, 10, 222, 9, 10, 
		    1, 11, 1, 11, 1, 11, 1, 11, 1, 11, 1, 11, 5, 11, 230, 8, 11, 10, 11, 
		    12, 11, 233, 9, 11, 1, 12, 1, 12, 1, 12, 3, 12, 238, 8, 12, 1, 13, 
		    1, 13, 1, 13, 3, 13, 243, 8, 13, 1, 14, 1, 14, 1, 14, 1, 14, 1, 14, 
		    1, 14, 5, 14, 251, 8, 14, 10, 14, 12, 14, 254, 9, 14, 1, 15, 1, 15, 
		    1, 15, 1, 15, 1, 15, 1, 15, 5, 15, 262, 8, 15, 10, 15, 12, 15, 265, 
		    9, 15, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 3, 16, 272, 8, 16, 1, 17, 
		    1, 17, 1, 17, 1, 17, 5, 17, 278, 8, 17, 10, 17, 12, 17, 281, 9, 17, 
		    1, 17, 1, 17, 1, 18, 1, 18, 1, 18, 1, 18, 1, 18, 1, 18, 1, 18, 1, 
		    18, 1, 18, 1, 18, 1, 18, 1, 18, 1, 18, 1, 18, 3, 18, 299, 8, 18, 1, 
		    18, 1, 18, 1, 18, 1, 18, 1, 18, 5, 18, 306, 8, 18, 10, 18, 12, 18, 
		    309, 9, 18, 1, 18, 1, 18, 1, 18, 1, 18, 1, 18, 1, 18, 1, 18, 1, 18, 
		    1, 18, 1, 18, 4, 18, 321, 8, 18, 11, 18, 12, 18, 322, 1, 18, 1, 18, 
		    1, 18, 1, 18, 1, 18, 4, 18, 330, 8, 18, 11, 18, 12, 18, 331, 1, 18, 
		    1, 18, 1, 18, 1, 18, 1, 18, 1, 18, 5, 18, 340, 8, 18, 10, 18, 12, 
		    18, 343, 9, 18, 1, 18, 1, 18, 1, 18, 1, 18, 1, 18, 1, 18, 1, 18, 5, 
		    18, 352, 8, 18, 10, 18, 12, 18, 355, 9, 18, 1, 18, 1, 18, 1, 18, 1, 
		    18, 1, 18, 1, 18, 1, 18, 5, 18, 364, 8, 18, 10, 18, 12, 18, 367, 9, 
		    18, 1, 18, 3, 18, 370, 8, 18, 1, 18, 1, 18, 3, 18, 374, 8, 18, 1, 
		    19, 1, 19, 1, 19, 5, 19, 379, 8, 19, 10, 19, 12, 19, 382, 9, 19, 1, 
		    20, 1, 20, 1, 20, 3, 20, 387, 8, 20, 1, 21, 1, 21, 1, 21, 1, 21, 1, 
		    21, 1, 21, 5, 21, 395, 8, 21, 10, 21, 12, 21, 398, 9, 21, 1, 21, 1, 
		    21, 3, 21, 402, 8, 21, 1, 22, 1, 22, 3, 22, 406, 8, 22, 1, 23, 1, 
		    23, 1, 23, 5, 23, 411, 8, 23, 10, 23, 12, 23, 414, 9, 23, 1, 24, 1, 
		    24, 1, 24, 5, 24, 419, 8, 24, 10, 24, 12, 24, 422, 9, 24, 1, 24, 0, 
		    4, 20, 22, 28, 30, 25, 0, 2, 4, 6, 8, 10, 12, 14, 16, 18, 20, 22, 
		    24, 26, 28, 30, 32, 34, 36, 38, 40, 42, 44, 46, 48, 0, 6, 1, 0, 1, 
		    2, 2, 0, 6, 6, 9, 12, 1, 0, 40, 44, 1, 0, 45, 46, 2, 0, 35, 35, 47, 
		    48, 1, 0, 51, 52, 476, 0, 53, 1, 0, 0, 0, 2, 145, 1, 0, 0, 0, 4, 147, 
		    1, 0, 0, 0, 6, 156, 1, 0, 0, 0, 8, 159, 1, 0, 0, 0, 10, 173, 1, 0, 
		    0, 0, 12, 182, 1, 0, 0, 0, 14, 199, 1, 0, 0, 0, 16, 204, 1, 0, 0, 
		    0, 18, 210, 1, 0, 0, 0, 20, 212, 1, 0, 0, 0, 22, 223, 1, 0, 0, 0, 
		    24, 234, 1, 0, 0, 0, 26, 239, 1, 0, 0, 0, 28, 244, 1, 0, 0, 0, 30, 
		    255, 1, 0, 0, 0, 32, 271, 1, 0, 0, 0, 34, 273, 1, 0, 0, 0, 36, 373, 
		    1, 0, 0, 0, 38, 375, 1, 0, 0, 0, 40, 383, 1, 0, 0, 0, 42, 401, 1, 
		    0, 0, 0, 44, 405, 1, 0, 0, 0, 46, 407, 1, 0, 0, 0, 48, 415, 1, 0, 
		    0, 0, 50, 52, 3, 2, 1, 0, 51, 50, 1, 0, 0, 0, 52, 55, 1, 0, 0, 0, 
		    53, 51, 1, 0, 0, 0, 53, 54, 1, 0, 0, 0, 54, 56, 1, 0, 0, 0, 55, 53, 
		    1, 0, 0, 0, 56, 57, 5, 0, 0, 1, 57, 1, 1, 0, 0, 0, 58, 59, 7, 0, 0, 
		    0, 59, 61, 5, 3, 0, 0, 60, 62, 3, 46, 23, 0, 61, 60, 1, 0, 0, 0, 61, 
		    62, 1, 0, 0, 0, 62, 63, 1, 0, 0, 0, 63, 146, 5, 4, 0, 0, 64, 65, 5, 
		    5, 0, 0, 65, 68, 3, 48, 24, 0, 66, 69, 3, 16, 8, 0, 67, 69, 3, 14, 
		    7, 0, 68, 66, 1, 0, 0, 0, 68, 67, 1, 0, 0, 0, 69, 72, 1, 0, 0, 0, 
		    70, 71, 5, 6, 0, 0, 71, 73, 3, 46, 23, 0, 72, 70, 1, 0, 0, 0, 72, 
		    73, 1, 0, 0, 0, 73, 146, 1, 0, 0, 0, 74, 75, 5, 7, 0, 0, 75, 76, 5, 
		    57, 0, 0, 76, 77, 3, 14, 7, 0, 77, 78, 5, 6, 0, 0, 78, 79, 3, 18, 
		    9, 0, 79, 146, 1, 0, 0, 0, 80, 81, 3, 48, 24, 0, 81, 82, 5, 8, 0, 
		    0, 82, 83, 3, 46, 23, 0, 83, 146, 1, 0, 0, 0, 84, 85, 5, 57, 0, 0, 
		    85, 86, 7, 1, 0, 0, 86, 146, 3, 18, 9, 0, 87, 88, 5, 57, 0, 0, 88, 
		    146, 5, 13, 0, 0, 89, 90, 5, 14, 0, 0, 90, 91, 3, 18, 9, 0, 91, 93, 
		    3, 4, 2, 0, 92, 94, 3, 6, 3, 0, 93, 92, 1, 0, 0, 0, 93, 94, 1, 0, 
		    0, 0, 94, 146, 1, 0, 0, 0, 95, 96, 5, 15, 0, 0, 96, 97, 3, 2, 1, 0, 
		    97, 98, 5, 16, 0, 0, 98, 99, 3, 18, 9, 0, 99, 100, 5, 16, 0, 0, 100, 
		    101, 3, 2, 1, 0, 101, 102, 3, 4, 2, 0, 102, 146, 1, 0, 0, 0, 103, 
		    104, 5, 15, 0, 0, 104, 105, 3, 18, 9, 0, 105, 106, 3, 4, 2, 0, 106, 
		    146, 1, 0, 0, 0, 107, 108, 5, 15, 0, 0, 108, 146, 3, 4, 2, 0, 109, 
		    146, 3, 8, 4, 0, 110, 146, 5, 17, 0, 0, 111, 146, 5, 18, 0, 0, 112, 
		    114, 5, 19, 0, 0, 113, 115, 3, 46, 23, 0, 114, 113, 1, 0, 0, 0, 114, 
		    115, 1, 0, 0, 0, 115, 146, 1, 0, 0, 0, 116, 117, 5, 20, 0, 0, 117, 
		    118, 5, 57, 0, 0, 118, 120, 5, 3, 0, 0, 119, 121, 3, 38, 19, 0, 120, 
		    119, 1, 0, 0, 0, 120, 121, 1, 0, 0, 0, 121, 122, 1, 0, 0, 0, 122, 
		    124, 5, 4, 0, 0, 123, 125, 3, 42, 21, 0, 124, 123, 1, 0, 0, 0, 124, 
		    125, 1, 0, 0, 0, 125, 126, 1, 0, 0, 0, 126, 146, 3, 4, 2, 0, 127, 
		    128, 5, 57, 0, 0, 128, 130, 5, 3, 0, 0, 129, 131, 3, 46, 23, 0, 130, 
		    129, 1, 0, 0, 0, 130, 131, 1, 0, 0, 0, 131, 132, 1, 0, 0, 0, 132, 
		    146, 5, 4, 0, 0, 133, 138, 5, 57, 0, 0, 134, 135, 5, 21, 0, 0, 135, 
		    136, 3, 18, 9, 0, 136, 137, 5, 22, 0, 0, 137, 139, 1, 0, 0, 0, 138, 
		    134, 1, 0, 0, 0, 139, 140, 1, 0, 0, 0, 140, 138, 1, 0, 0, 0, 140, 
		    141, 1, 0, 0, 0, 141, 142, 1, 0, 0, 0, 142, 143, 5, 6, 0, 0, 143, 
		    144, 3, 18, 9, 0, 144, 146, 1, 0, 0, 0, 145, 58, 1, 0, 0, 0, 145, 
		    64, 1, 0, 0, 0, 145, 74, 1, 0, 0, 0, 145, 80, 1, 0, 0, 0, 145, 84, 
		    1, 0, 0, 0, 145, 87, 1, 0, 0, 0, 145, 89, 1, 0, 0, 0, 145, 95, 1, 
		    0, 0, 0, 145, 103, 1, 0, 0, 0, 145, 107, 1, 0, 0, 0, 145, 109, 1, 
		    0, 0, 0, 145, 110, 1, 0, 0, 0, 145, 111, 1, 0, 0, 0, 145, 112, 1, 
		    0, 0, 0, 145, 116, 1, 0, 0, 0, 145, 127, 1, 0, 0, 0, 145, 133, 1, 
		    0, 0, 0, 146, 3, 1, 0, 0, 0, 147, 151, 5, 23, 0, 0, 148, 150, 3, 2, 
		    1, 0, 149, 148, 1, 0, 0, 0, 150, 153, 1, 0, 0, 0, 151, 149, 1, 0, 
		    0, 0, 151, 152, 1, 0, 0, 0, 152, 154, 1, 0, 0, 0, 153, 151, 1, 0, 
		    0, 0, 154, 155, 5, 24, 0, 0, 155, 5, 1, 0, 0, 0, 156, 157, 5, 25, 
		    0, 0, 157, 158, 3, 4, 2, 0, 158, 7, 1, 0, 0, 0, 159, 160, 5, 26, 0, 
		    0, 160, 161, 3, 18, 9, 0, 161, 165, 5, 23, 0, 0, 162, 164, 3, 10, 
		    5, 0, 163, 162, 1, 0, 0, 0, 164, 167, 1, 0, 0, 0, 165, 163, 1, 0, 
		    0, 0, 165, 166, 1, 0, 0, 0, 166, 169, 1, 0, 0, 0, 167, 165, 1, 0, 
		    0, 0, 168, 170, 3, 12, 6, 0, 169, 168, 1, 0, 0, 0, 169, 170, 1, 0, 
		    0, 0, 170, 171, 1, 0, 0, 0, 171, 172, 5, 24, 0, 0, 172, 9, 1, 0, 0, 
		    0, 173, 174, 5, 27, 0, 0, 174, 175, 3, 18, 9, 0, 175, 179, 5, 28, 
		    0, 0, 176, 178, 3, 2, 1, 0, 177, 176, 1, 0, 0, 0, 178, 181, 1, 0, 
		    0, 0, 179, 177, 1, 0, 0, 0, 179, 180, 1, 0, 0, 0, 180, 11, 1, 0, 0, 
		    0, 181, 179, 1, 0, 0, 0, 182, 183, 5, 29, 0, 0, 183, 187, 5, 28, 0, 
		    0, 184, 186, 3, 2, 1, 0, 185, 184, 1, 0, 0, 0, 186, 189, 1, 0, 0, 
		    0, 187, 185, 1, 0, 0, 0, 187, 188, 1, 0, 0, 0, 188, 13, 1, 0, 0, 0, 
		    189, 187, 1, 0, 0, 0, 190, 200, 5, 30, 0, 0, 191, 200, 5, 31, 0, 0, 
		    192, 200, 5, 32, 0, 0, 193, 200, 5, 33, 0, 0, 194, 200, 5, 34, 0, 
		    0, 195, 196, 5, 35, 0, 0, 196, 200, 3, 14, 7, 0, 197, 198, 5, 36, 
		    0, 0, 198, 200, 3, 14, 7, 0, 199, 190, 1, 0, 0, 0, 199, 191, 1, 0, 
		    0, 0, 199, 192, 1, 0, 0, 0, 199, 193, 1, 0, 0, 0, 199, 194, 1, 0, 
		    0, 0, 199, 195, 1, 0, 0, 0, 199, 197, 1, 0, 0, 0, 200, 15, 1, 0, 0, 
		    0, 201, 202, 5, 21, 0, 0, 202, 203, 5, 56, 0, 0, 203, 205, 5, 22, 
		    0, 0, 204, 201, 1, 0, 0, 0, 205, 206, 1, 0, 0, 0, 206, 204, 1, 0, 
		    0, 0, 206, 207, 1, 0, 0, 0, 207, 208, 1, 0, 0, 0, 208, 209, 3, 14, 
		    7, 0, 209, 17, 1, 0, 0, 0, 210, 211, 3, 20, 10, 0, 211, 19, 1, 0, 
		    0, 0, 212, 213, 6, 10, -1, 0, 213, 214, 3, 22, 11, 0, 214, 220, 1, 
		    0, 0, 0, 215, 216, 10, 2, 0, 0, 216, 217, 5, 37, 0, 0, 217, 219, 3, 
		    22, 11, 0, 218, 215, 1, 0, 0, 0, 219, 222, 1, 0, 0, 0, 220, 218, 1, 
		    0, 0, 0, 220, 221, 1, 0, 0, 0, 221, 21, 1, 0, 0, 0, 222, 220, 1, 0, 
		    0, 0, 223, 224, 6, 11, -1, 0, 224, 225, 3, 24, 12, 0, 225, 231, 1, 
		    0, 0, 0, 226, 227, 10, 2, 0, 0, 227, 228, 5, 38, 0, 0, 228, 230, 3, 
		    24, 12, 0, 229, 226, 1, 0, 0, 0, 230, 233, 1, 0, 0, 0, 231, 229, 1, 
		    0, 0, 0, 231, 232, 1, 0, 0, 0, 232, 23, 1, 0, 0, 0, 233, 231, 1, 0, 
		    0, 0, 234, 237, 3, 26, 13, 0, 235, 236, 5, 39, 0, 0, 236, 238, 3, 
		    26, 13, 0, 237, 235, 1, 0, 0, 0, 237, 238, 1, 0, 0, 0, 238, 25, 1, 
		    0, 0, 0, 239, 242, 3, 28, 14, 0, 240, 241, 7, 2, 0, 0, 241, 243, 3, 
		    28, 14, 0, 242, 240, 1, 0, 0, 0, 242, 243, 1, 0, 0, 0, 243, 27, 1, 
		    0, 0, 0, 244, 245, 6, 14, -1, 0, 245, 246, 3, 30, 15, 0, 246, 252, 
		    1, 0, 0, 0, 247, 248, 10, 2, 0, 0, 248, 249, 7, 3, 0, 0, 249, 251, 
		    3, 30, 15, 0, 250, 247, 1, 0, 0, 0, 251, 254, 1, 0, 0, 0, 252, 250, 
		    1, 0, 0, 0, 252, 253, 1, 0, 0, 0, 253, 29, 1, 0, 0, 0, 254, 252, 1, 
		    0, 0, 0, 255, 256, 6, 15, -1, 0, 256, 257, 3, 32, 16, 0, 257, 263, 
		    1, 0, 0, 0, 258, 259, 10, 2, 0, 0, 259, 260, 7, 4, 0, 0, 260, 262, 
		    3, 32, 16, 0, 261, 258, 1, 0, 0, 0, 262, 265, 1, 0, 0, 0, 263, 261, 
		    1, 0, 0, 0, 263, 264, 1, 0, 0, 0, 264, 31, 1, 0, 0, 0, 265, 263, 1, 
		    0, 0, 0, 266, 272, 3, 36, 18, 0, 267, 268, 5, 46, 0, 0, 268, 272, 
		    3, 32, 16, 0, 269, 270, 5, 49, 0, 0, 270, 272, 3, 32, 16, 0, 271, 
		    266, 1, 0, 0, 0, 271, 267, 1, 0, 0, 0, 271, 269, 1, 0, 0, 0, 272, 
		    33, 1, 0, 0, 0, 273, 274, 5, 23, 0, 0, 274, 279, 3, 18, 9, 0, 275, 
		    276, 5, 50, 0, 0, 276, 278, 3, 18, 9, 0, 277, 275, 1, 0, 0, 0, 278, 
		    281, 1, 0, 0, 0, 279, 277, 1, 0, 0, 0, 279, 280, 1, 0, 0, 0, 280, 
		    282, 1, 0, 0, 0, 281, 279, 1, 0, 0, 0, 282, 283, 5, 24, 0, 0, 283, 
		    35, 1, 0, 0, 0, 284, 285, 5, 3, 0, 0, 285, 286, 3, 18, 9, 0, 286, 
		    287, 5, 4, 0, 0, 287, 374, 1, 0, 0, 0, 288, 374, 5, 55, 0, 0, 289, 
		    374, 5, 56, 0, 0, 290, 374, 5, 61, 0, 0, 291, 374, 5, 58, 0, 0, 292, 
		    374, 5, 57, 0, 0, 293, 374, 7, 5, 0, 0, 294, 374, 5, 53, 0, 0, 295, 
		    296, 5, 57, 0, 0, 296, 298, 5, 3, 0, 0, 297, 299, 3, 46, 23, 0, 298, 
		    297, 1, 0, 0, 0, 298, 299, 1, 0, 0, 0, 299, 300, 1, 0, 0, 0, 300, 
		    374, 5, 4, 0, 0, 301, 302, 5, 21, 0, 0, 302, 307, 3, 18, 9, 0, 303, 
		    304, 5, 50, 0, 0, 304, 306, 3, 18, 9, 0, 305, 303, 1, 0, 0, 0, 306, 
		    309, 1, 0, 0, 0, 307, 305, 1, 0, 0, 0, 307, 308, 1, 0, 0, 0, 308, 
		    310, 1, 0, 0, 0, 309, 307, 1, 0, 0, 0, 310, 311, 5, 22, 0, 0, 311, 
		    374, 1, 0, 0, 0, 312, 313, 5, 54, 0, 0, 313, 374, 5, 57, 0, 0, 314, 
		    315, 5, 54, 0, 0, 315, 320, 5, 57, 0, 0, 316, 317, 5, 21, 0, 0, 317, 
		    318, 3, 18, 9, 0, 318, 319, 5, 22, 0, 0, 319, 321, 1, 0, 0, 0, 320, 
		    316, 1, 0, 0, 0, 321, 322, 1, 0, 0, 0, 322, 320, 1, 0, 0, 0, 322, 
		    323, 1, 0, 0, 0, 323, 374, 1, 0, 0, 0, 324, 329, 5, 57, 0, 0, 325, 
		    326, 5, 21, 0, 0, 326, 327, 3, 18, 9, 0, 327, 328, 5, 22, 0, 0, 328, 
		    330, 1, 0, 0, 0, 329, 325, 1, 0, 0, 0, 330, 331, 1, 0, 0, 0, 331, 
		    329, 1, 0, 0, 0, 331, 332, 1, 0, 0, 0, 332, 374, 1, 0, 0, 0, 333, 
		    334, 5, 36, 0, 0, 334, 335, 3, 14, 7, 0, 335, 336, 5, 23, 0, 0, 336, 
		    341, 3, 18, 9, 0, 337, 338, 5, 50, 0, 0, 338, 340, 3, 18, 9, 0, 339, 
		    337, 1, 0, 0, 0, 340, 343, 1, 0, 0, 0, 341, 339, 1, 0, 0, 0, 341, 
		    342, 1, 0, 0, 0, 342, 344, 1, 0, 0, 0, 343, 341, 1, 0, 0, 0, 344, 
		    345, 5, 24, 0, 0, 345, 374, 1, 0, 0, 0, 346, 347, 3, 16, 8, 0, 347, 
		    348, 5, 23, 0, 0, 348, 353, 3, 18, 9, 0, 349, 350, 5, 50, 0, 0, 350, 
		    352, 3, 18, 9, 0, 351, 349, 1, 0, 0, 0, 352, 355, 1, 0, 0, 0, 353, 
		    351, 1, 0, 0, 0, 353, 354, 1, 0, 0, 0, 354, 356, 1, 0, 0, 0, 355, 
		    353, 1, 0, 0, 0, 356, 357, 5, 24, 0, 0, 357, 374, 1, 0, 0, 0, 358, 
		    359, 3, 16, 8, 0, 359, 360, 5, 23, 0, 0, 360, 365, 3, 34, 17, 0, 361, 
		    362, 5, 50, 0, 0, 362, 364, 3, 34, 17, 0, 363, 361, 1, 0, 0, 0, 364, 
		    367, 1, 0, 0, 0, 365, 363, 1, 0, 0, 0, 365, 366, 1, 0, 0, 0, 366, 
		    369, 1, 0, 0, 0, 367, 365, 1, 0, 0, 0, 368, 370, 5, 50, 0, 0, 369, 
		    368, 1, 0, 0, 0, 369, 370, 1, 0, 0, 0, 370, 371, 1, 0, 0, 0, 371, 
		    372, 5, 24, 0, 0, 372, 374, 1, 0, 0, 0, 373, 284, 1, 0, 0, 0, 373, 
		    288, 1, 0, 0, 0, 373, 289, 1, 0, 0, 0, 373, 290, 1, 0, 0, 0, 373, 
		    291, 1, 0, 0, 0, 373, 292, 1, 0, 0, 0, 373, 293, 1, 0, 0, 0, 373, 
		    294, 1, 0, 0, 0, 373, 295, 1, 0, 0, 0, 373, 301, 1, 0, 0, 0, 373, 
		    312, 1, 0, 0, 0, 373, 314, 1, 0, 0, 0, 373, 324, 1, 0, 0, 0, 373, 
		    333, 1, 0, 0, 0, 373, 346, 1, 0, 0, 0, 373, 358, 1, 0, 0, 0, 374, 
		    37, 1, 0, 0, 0, 375, 380, 3, 40, 20, 0, 376, 377, 5, 50, 0, 0, 377, 
		    379, 3, 40, 20, 0, 378, 376, 1, 0, 0, 0, 379, 382, 1, 0, 0, 0, 380, 
		    378, 1, 0, 0, 0, 380, 381, 1, 0, 0, 0, 381, 39, 1, 0, 0, 0, 382, 380, 
		    1, 0, 0, 0, 383, 386, 5, 57, 0, 0, 384, 387, 3, 16, 8, 0, 385, 387, 
		    3, 14, 7, 0, 386, 384, 1, 0, 0, 0, 386, 385, 1, 0, 0, 0, 387, 41, 
		    1, 0, 0, 0, 388, 402, 3, 14, 7, 0, 389, 402, 3, 16, 8, 0, 390, 391, 
		    5, 3, 0, 0, 391, 396, 3, 44, 22, 0, 392, 393, 5, 50, 0, 0, 393, 395, 
		    3, 44, 22, 0, 394, 392, 1, 0, 0, 0, 395, 398, 1, 0, 0, 0, 396, 394, 
		    1, 0, 0, 0, 396, 397, 1, 0, 0, 0, 397, 399, 1, 0, 0, 0, 398, 396, 
		    1, 0, 0, 0, 399, 400, 5, 4, 0, 0, 400, 402, 1, 0, 0, 0, 401, 388, 
		    1, 0, 0, 0, 401, 389, 1, 0, 0, 0, 401, 390, 1, 0, 0, 0, 402, 43, 1, 
		    0, 0, 0, 403, 406, 3, 14, 7, 0, 404, 406, 3, 16, 8, 0, 405, 403, 1, 
		    0, 0, 0, 405, 404, 1, 0, 0, 0, 406, 45, 1, 0, 0, 0, 407, 412, 3, 18, 
		    9, 0, 408, 409, 5, 50, 0, 0, 409, 411, 3, 18, 9, 0, 410, 408, 1, 0, 
		    0, 0, 411, 414, 1, 0, 0, 0, 412, 410, 1, 0, 0, 0, 412, 413, 1, 0, 
		    0, 0, 413, 47, 1, 0, 0, 0, 414, 412, 1, 0, 0, 0, 415, 420, 5, 57, 
		    0, 0, 416, 417, 5, 50, 0, 0, 417, 419, 5, 57, 0, 0, 418, 416, 1, 0, 
		    0, 0, 419, 422, 1, 0, 0, 0, 420, 418, 1, 0, 0, 0, 420, 421, 1, 0, 
		    0, 0, 421, 49, 1, 0, 0, 0, 422, 420, 1, 0, 0, 0, 42, 53, 61, 68, 72, 
		    93, 114, 120, 124, 130, 140, 145, 151, 165, 169, 179, 187, 199, 206, 
		    220, 231, 237, 242, 252, 263, 271, 279, 298, 307, 322, 331, 341, 353, 
		    365, 369, 373, 380, 386, 396, 401, 405, 412, 420];
		protected static $atn;
		protected static $decisionToDFA;
		protected static $sharedContextCache;

		public function __construct(TokenStream $input)
		{
			parent::__construct($input);

			self::initialize();

			$this->interp = new ParserATNSimulator($this, self::$atn, self::$decisionToDFA, self::$sharedContextCache);
		}

		private static function initialize(): void
		{
			if (self::$atn !== null) {
				return;
			}

			RuntimeMetaData::checkVersion('4.13.2', RuntimeMetaData::VERSION);

			$atn = (new ATNDeserializer())->deserialize(self::SERIALIZED_ATN);

			$decisionToDFA = [];
			for ($i = 0, $count = $atn->getNumberOfDecisions(); $i < $count; $i++) {
				$decisionToDFA[] = new DFA($atn->getDecisionState($i), $i);
			}

			self::$atn = $atn;
			self::$decisionToDFA = $decisionToDFA;
			self::$sharedContextCache = new PredictionContextCache();
		}

		public function getGrammarFileName(): string
		{
			return "Grammar.g4";
		}

		public function getRuleNames(): array
		{
			return self::RULE_NAMES;
		}

		public function getSerializedATN(): array
		{
			return self::SERIALIZED_ATN;
		}

		public function getATN(): ATN
		{
			return self::$atn;
		}

		public function getVocabulary(): Vocabulary
        {
            static $vocabulary;

			return $vocabulary = $vocabulary ?? new VocabularyImpl(self::LITERAL_NAMES, self::SYMBOLIC_NAMES);
        }

		/**
		 * @throws RecognitionException
		 */
		public function p(): Context\PContext
		{
		    $localContext = new Context\PContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 0, self::RULE_p);

		    try {
		        $localContext = new Context\ProgramContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(53);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 144115188144980134) !== 0)) {
		        	$this->setState(50);
		        	$this->stmt();
		        	$this->setState(55);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(56);
		        $this->match(self::EOF);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function stmt(): Context\StmtContext
		{
		    $localContext = new Context\StmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 2, self::RULE_stmt);

		    try {
		        $this->setState(145);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 10, $this->ctx)) {
		        	case 1:
		        	    $localContext = new Context\PrintStatementContext($localContext);
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(58);

		        	    $_la = $this->input->LA(1);

		        	    if (!($_la === self::T__0 || $_la === self::T__1)) {
		        	    $this->errorHandler->recoverInline($this);
		        	    } else {
		        	    	if ($this->input->LA(1) === Token::EOF) {
		        	    	    $this->matchedEOF = true;
		        	        }

		        	    	$this->errorHandler->reportMatch($this);
		        	    	$this->consume();
		        	    }
		        	    $this->setState(59);
		        	    $this->match(self::T__2);
		        	    $this->setState(61);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 2880685349122605064) !== 0)) {
		        	    	$this->setState(60);
		        	    	$this->args();
		        	    }
		        	    $this->setState(63);
		        	    $this->match(self::T__3);
		        	break;

		        	case 2:
		        	    $localContext = new Context\VarDeclarationContext($localContext);
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(64);
		        	    $this->match(self::T__4);
		        	    $this->setState(65);
		        	    $this->idList();
		        	    $this->setState(68);
		        	    $this->errorHandler->sync($this);

		        	    switch ($this->input->LA(1)) {
		        	        case self::T__20:
		        	        	$this->setState(66);
		        	        	$this->arrayType();
		        	        	break;

		        	        case self::T__29:
		        	        case self::T__30:
		        	        case self::T__31:
		        	        case self::T__32:
		        	        case self::T__33:
		        	        case self::T__34:
		        	        case self::T__35:
		        	        	$this->setState(67);
		        	        	$this->type();
		        	        	break;

		        	    default:
		        	    	throw new NoViableAltException($this);
		        	    }
		        	    $this->setState(72);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if ($_la === self::T__5) {
		        	    	$this->setState(70);
		        	    	$this->match(self::T__5);
		        	    	$this->setState(71);
		        	    	$this->args();
		        	    }
		        	break;

		        	case 3:
		        	    $localContext = new Context\ConstDeclarationContext($localContext);
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(74);
		        	    $this->match(self::T__6);
		        	    $this->setState(75);
		        	    $this->match(self::ID);
		        	    $this->setState(76);
		        	    $this->type();
		        	    $this->setState(77);
		        	    $this->match(self::T__5);
		        	    $this->setState(78);
		        	    $this->e();
		        	break;

		        	case 4:
		        	    $localContext = new Context\ShortVarDeclarationContext($localContext);
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(80);
		        	    $this->idList();
		        	    $this->setState(81);
		        	    $this->match(self::T__7);
		        	    $this->setState(82);
		        	    $this->args();
		        	break;

		        	case 5:
		        	    $localContext = new Context\AssignmentStatementContext($localContext);
		        	    $this->enterOuterAlt($localContext, 5);
		        	    $this->setState(84);
		        	    $this->match(self::ID);
		        	    $this->setState(85);

		        	    $localContext->op = $this->input->LT(1);
		        	    $_la = $this->input->LA(1);

		        	    if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 7744) !== 0))) {
		        	    	    $localContext->op = $this->errorHandler->recoverInline($this);
		        	    } else {
		        	    	if ($this->input->LA(1) === Token::EOF) {
		        	    	    $this->matchedEOF = true;
		        	        }

		        	    	$this->errorHandler->reportMatch($this);
		        	    	$this->consume();
		        	    }
		        	    $this->setState(86);
		        	    $this->e();
		        	break;

		        	case 6:
		        	    $localContext = new Context\IncrementStatementContext($localContext);
		        	    $this->enterOuterAlt($localContext, 6);
		        	    $this->setState(87);
		        	    $this->match(self::ID);
		        	    $this->setState(88);
		        	    $this->match(self::T__12);
		        	break;

		        	case 7:
		        	    $localContext = new Context\IfStatementContext($localContext);
		        	    $this->enterOuterAlt($localContext, 7);
		        	    $this->setState(89);
		        	    $this->match(self::T__13);
		        	    $this->setState(90);
		        	    $this->e();
		        	    $this->setState(91);
		        	    $this->block();
		        	    $this->setState(93);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if ($_la === self::T__24) {
		        	    	$this->setState(92);
		        	    	$this->elseStmt();
		        	    }
		        	break;

		        	case 8:
		        	    $localContext = new Context\ForClassicStatementContext($localContext);
		        	    $this->enterOuterAlt($localContext, 8);
		        	    $this->setState(95);
		        	    $this->match(self::T__14);
		        	    $this->setState(96);
		        	    $localContext->init = $this->stmt();
		        	    $this->setState(97);
		        	    $this->match(self::T__15);
		        	    $this->setState(98);
		        	    $localContext->cond = $this->e();
		        	    $this->setState(99);
		        	    $this->match(self::T__15);
		        	    $this->setState(100);
		        	    $localContext->update = $this->stmt();
		        	    $this->setState(101);
		        	    $this->block();
		        	break;

		        	case 9:
		        	    $localContext = new Context\WhileStatementContext($localContext);
		        	    $this->enterOuterAlt($localContext, 9);
		        	    $this->setState(103);
		        	    $this->match(self::T__14);
		        	    $this->setState(104);
		        	    $this->e();
		        	    $this->setState(105);
		        	    $this->block();
		        	break;

		        	case 10:
		        	    $localContext = new Context\InfiniteForStatementContext($localContext);
		        	    $this->enterOuterAlt($localContext, 10);
		        	    $this->setState(107);
		        	    $this->match(self::T__14);
		        	    $this->setState(108);
		        	    $this->block();
		        	break;

		        	case 11:
		        	    $localContext = new Context\SwitchStatementContext($localContext);
		        	    $this->enterOuterAlt($localContext, 11);
		        	    $this->setState(109);
		        	    $this->switchStmt();
		        	break;

		        	case 12:
		        	    $localContext = new Context\ContinueStatementContext($localContext);
		        	    $this->enterOuterAlt($localContext, 12);
		        	    $this->setState(110);
		        	    $this->match(self::T__16);
		        	break;

		        	case 13:
		        	    $localContext = new Context\BreakStatementContext($localContext);
		        	    $this->enterOuterAlt($localContext, 13);
		        	    $this->setState(111);
		        	    $this->match(self::T__17);
		        	break;

		        	case 14:
		        	    $localContext = new Context\ReturnStatementContext($localContext);
		        	    $this->enterOuterAlt($localContext, 14);
		        	    $this->setState(112);
		        	    $this->match(self::T__18);
		        	    $this->setState(114);
		        	    $this->errorHandler->sync($this);

		        	    switch ($this->getInterpreter()->adaptivePredict($this->input, 5, $this->ctx)) {
		        	        case 1:
		        	    	    $this->setState(113);
		        	    	    $this->args();
		        	    	break;
		        	    }
		        	break;

		        	case 15:
		        	    $localContext = new Context\FunctionDeclarationContext($localContext);
		        	    $this->enterOuterAlt($localContext, 15);
		        	    $this->setState(116);
		        	    $this->match(self::T__19);
		        	    $this->setState(117);
		        	    $this->match(self::ID);
		        	    $this->setState(118);
		        	    $this->match(self::T__2);
		        	    $this->setState(120);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if ($_la === self::ID) {
		        	    	$this->setState(119);
		        	    	$this->params();
		        	    }
		        	    $this->setState(122);
		        	    $this->match(self::T__3);
		        	    $this->setState(124);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 136367308808) !== 0)) {
		        	    	$this->setState(123);
		        	    	$this->returnSpec();
		        	    }
		        	    $this->setState(126);
		        	    $this->block();
		        	break;

		        	case 16:
		        	    $localContext = new Context\FunctionCallStatementContext($localContext);
		        	    $this->enterOuterAlt($localContext, 16);
		        	    $this->setState(127);
		        	    $this->match(self::ID);
		        	    $this->setState(128);
		        	    $this->match(self::T__2);
		        	    $this->setState(130);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 2880685349122605064) !== 0)) {
		        	    	$this->setState(129);
		        	    	$this->args();
		        	    }
		        	    $this->setState(132);
		        	    $this->match(self::T__3);
		        	break;

		        	case 17:
		        	    $localContext = new Context\ArrayAssignmentStatementContext($localContext);
		        	    $this->enterOuterAlt($localContext, 17);
		        	    $this->setState(133);
		        	    $this->match(self::ID);
		        	    $this->setState(138); 
		        	    $this->errorHandler->sync($this);

		        	    $_la = $this->input->LA(1);
		        	    do {
		        	    	$this->setState(134);
		        	    	$this->match(self::T__20);
		        	    	$this->setState(135);
		        	    	$localContext->e = $this->e();
		        	    	$localContext->index[] = $localContext->e;
		        	    	$this->setState(136);
		        	    	$this->match(self::T__21);
		        	    	$this->setState(140); 
		        	    	$this->errorHandler->sync($this);
		        	    	$_la = $this->input->LA(1);
		        	    } while ($_la === self::T__20);
		        	    $this->setState(142);
		        	    $this->match(self::T__5);
		        	    $this->setState(143);
		        	    $localContext->assign = $this->e();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function block(): Context\BlockContext
		{
		    $localContext = new Context\BlockContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 4, self::RULE_block);

		    try {
		        $localContext = new Context\BlockStatementContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(147);
		        $this->match(self::T__22);
		        $this->setState(151);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 144115188144980134) !== 0)) {
		        	$this->setState(148);
		        	$this->stmt();
		        	$this->setState(153);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(154);
		        $this->match(self::T__23);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function elseStmt(): Context\ElseStmtContext
		{
		    $localContext = new Context\ElseStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 6, self::RULE_elseStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(156);
		        $this->match(self::T__24);
		        $this->setState(157);
		        $this->block();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function switchStmt(): Context\SwitchStmtContext
		{
		    $localContext = new Context\SwitchStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 8, self::RULE_switchStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(159);
		        $this->match(self::T__25);
		        $this->setState(160);
		        $this->e();
		        $this->setState(161);
		        $this->match(self::T__22);
		        $this->setState(165);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__26) {
		        	$this->setState(162);
		        	$this->caseStmt();
		        	$this->setState(167);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(169);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__28) {
		        	$this->setState(168);
		        	$this->defaultStmt();
		        }
		        $this->setState(171);
		        $this->match(self::T__23);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function caseStmt(): Context\CaseStmtContext
		{
		    $localContext = new Context\CaseStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 10, self::RULE_caseStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(173);
		        $this->match(self::T__26);
		        $this->setState(174);
		        $this->e();
		        $this->setState(175);
		        $this->match(self::T__27);
		        $this->setState(179);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 144115188144980134) !== 0)) {
		        	$this->setState(176);
		        	$this->stmt();
		        	$this->setState(181);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function defaultStmt(): Context\DefaultStmtContext
		{
		    $localContext = new Context\DefaultStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 12, self::RULE_defaultStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(182);
		        $this->match(self::T__28);
		        $this->setState(183);
		        $this->match(self::T__27);
		        $this->setState(187);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 144115188144980134) !== 0)) {
		        	$this->setState(184);
		        	$this->stmt();
		        	$this->setState(189);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function type(): Context\TypeContext
		{
		    $localContext = new Context\TypeContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 14, self::RULE_type);

		    try {
		        $this->setState(199);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::T__29:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(190);
		            	$this->match(self::T__29);
		            	break;

		            case self::T__30:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(191);
		            	$this->match(self::T__30);
		            	break;

		            case self::T__31:
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(192);
		            	$this->match(self::T__31);
		            	break;

		            case self::T__32:
		            	$this->enterOuterAlt($localContext, 4);
		            	$this->setState(193);
		            	$this->match(self::T__32);
		            	break;

		            case self::T__33:
		            	$this->enterOuterAlt($localContext, 5);
		            	$this->setState(194);
		            	$this->match(self::T__33);
		            	break;

		            case self::T__34:
		            	$this->enterOuterAlt($localContext, 6);
		            	$this->setState(195);
		            	$this->match(self::T__34);
		            	$this->setState(196);
		            	$this->type();
		            	break;

		            case self::T__35:
		            	$this->enterOuterAlt($localContext, 7);
		            	$this->setState(197);
		            	$this->match(self::T__35);
		            	$this->setState(198);
		            	$this->type();
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function arrayType(): Context\ArrayTypeContext
		{
		    $localContext = new Context\ArrayTypeContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 16, self::RULE_arrayType);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(204); 
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        do {
		        	$this->setState(201);
		        	$this->match(self::T__20);
		        	$this->setState(202);
		        	$this->match(self::INT);
		        	$this->setState(203);
		        	$this->match(self::T__21);
		        	$this->setState(206); 
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        } while ($_la === self::T__20);
		        $this->setState(208);
		        $this->type();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function e(): Context\EContext
		{
		    $localContext = new Context\EContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 18, self::RULE_e);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(210);
		        $this->recursiveLogic(0);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function logic(): Context\LogicContext
		{
			return $this->recursiveLogic(0);
		}

		/**
		 * @throws RecognitionException
		 */
		private function recursiveLogic(int $precedence): Context\LogicContext
		{
			$parentContext = $this->ctx;
			$parentState = $this->getState();
			$localContext = new Context\LogicContext($this->ctx, $parentState);
			$previousContext = $localContext;
			$startState = 20;
			$this->enterRecursionRule($localContext, 20, self::RULE_logic, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$localContext = new Context\OrExpressionContext($localContext);
				$this->ctx = $localContext;
				$previousContext = $localContext;

				$this->setState(213);
				$this->recursiveAndExpr(0);
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(220);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 18, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$localContext = new Context\OrExpressionContext(new Context\LogicContext($parentContext, $parentState));
						$this->pushNewRecursionContext($localContext, $startState, self::RULE_logic);
						$this->setState(215);

						if (!($this->precpred($this->ctx, 2))) {
						    throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 2)");
						}
						$this->setState(216);
						$this->match(self::T__36);
						$this->setState(217);
						$this->recursiveAndExpr(0); 
					}

					$this->setState(222);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 18, $this->ctx);
				}
			} catch (RecognitionException $exception) {
				$localContext->exception = $exception;
				$this->errorHandler->reportError($this, $exception);
				$this->errorHandler->recover($this, $exception);
			} finally {
				$this->unrollRecursionContexts($parentContext);
			}

			return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function andExpr(): Context\AndExprContext
		{
			return $this->recursiveAndExpr(0);
		}

		/**
		 * @throws RecognitionException
		 */
		private function recursiveAndExpr(int $precedence): Context\AndExprContext
		{
			$parentContext = $this->ctx;
			$parentState = $this->getState();
			$localContext = new Context\AndExprContext($this->ctx, $parentState);
			$previousContext = $localContext;
			$startState = 22;
			$this->enterRecursionRule($localContext, 22, self::RULE_andExpr, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$localContext = new Context\AndExpressionContext($localContext);
				$this->ctx = $localContext;
				$previousContext = $localContext;

				$this->setState(224);
				$this->eq();
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(231);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 19, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$localContext = new Context\AndExpressionContext(new Context\AndExprContext($parentContext, $parentState));
						$this->pushNewRecursionContext($localContext, $startState, self::RULE_andExpr);
						$this->setState(226);

						if (!($this->precpred($this->ctx, 2))) {
						    throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 2)");
						}
						$this->setState(227);
						$this->match(self::T__37);
						$this->setState(228);
						$this->eq(); 
					}

					$this->setState(233);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 19, $this->ctx);
				}
			} catch (RecognitionException $exception) {
				$localContext->exception = $exception;
				$this->errorHandler->reportError($this, $exception);
				$this->errorHandler->recover($this, $exception);
			} finally {
				$this->unrollRecursionContexts($parentContext);
			}

			return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function eq(): Context\EqContext
		{
		    $localContext = new Context\EqContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 24, self::RULE_eq);

		    try {
		        $localContext = new Context\EqualityExpressionContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(234);
		        $localContext->left = $this->ineq();
		        $this->setState(237);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 20, $this->ctx)) {
		            case 1:
		        	    $this->setState(235);
		        	    $this->match(self::T__38);
		        	    $this->setState(236);
		        	    $localContext->right = $this->ineq();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function ineq(): Context\IneqContext
		{
		    $localContext = new Context\IneqContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 26, self::RULE_ineq);

		    try {
		        $localContext = new Context\InequalityExpressionContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(239);
		        $localContext->left = $this->recursiveAdd(0);
		        $this->setState(242);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 21, $this->ctx)) {
		            case 1:
		        	    $this->setState(240);

		        	    $localContext->op = $this->input->LT(1);
		        	    $_la = $this->input->LA(1);

		        	    if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 34084860461056) !== 0))) {
		        	    	    $localContext->op = $this->errorHandler->recoverInline($this);
		        	    } else {
		        	    	if ($this->input->LA(1) === Token::EOF) {
		        	    	    $this->matchedEOF = true;
		        	        }

		        	    	$this->errorHandler->reportMatch($this);
		        	    	$this->consume();
		        	    }
		        	    $this->setState(241);
		        	    $localContext->right = $this->recursiveAdd(0);
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function add(): Context\AddContext
		{
			return $this->recursiveAdd(0);
		}

		/**
		 * @throws RecognitionException
		 */
		private function recursiveAdd(int $precedence): Context\AddContext
		{
			$parentContext = $this->ctx;
			$parentState = $this->getState();
			$localContext = new Context\AddContext($this->ctx, $parentState);
			$previousContext = $localContext;
			$startState = 28;
			$this->enterRecursionRule($localContext, 28, self::RULE_add, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$localContext = new Context\AddExpressionContext($localContext);
				$this->ctx = $localContext;
				$previousContext = $localContext;

				$this->setState(245);
				$this->recursiveProd(0);
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(252);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 22, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$localContext = new Context\AddExpressionContext(new Context\AddContext($parentContext, $parentState));
						$this->pushNewRecursionContext($localContext, $startState, self::RULE_add);
						$this->setState(247);

						if (!($this->precpred($this->ctx, 2))) {
						    throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 2)");
						}
						$this->setState(248);

						$localContext->op = $this->input->LT(1);
						$_la = $this->input->LA(1);

						if (!($_la === self::T__44 || $_la === self::T__45)) {
							    $localContext->op = $this->errorHandler->recoverInline($this);
						} else {
							if ($this->input->LA(1) === Token::EOF) {
							    $this->matchedEOF = true;
						    }

							$this->errorHandler->reportMatch($this);
							$this->consume();
						}
						$this->setState(249);
						$this->recursiveProd(0); 
					}

					$this->setState(254);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 22, $this->ctx);
				}
			} catch (RecognitionException $exception) {
				$localContext->exception = $exception;
				$this->errorHandler->reportError($this, $exception);
				$this->errorHandler->recover($this, $exception);
			} finally {
				$this->unrollRecursionContexts($parentContext);
			}

			return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function prod(): Context\ProdContext
		{
			return $this->recursiveProd(0);
		}

		/**
		 * @throws RecognitionException
		 */
		private function recursiveProd(int $precedence): Context\ProdContext
		{
			$parentContext = $this->ctx;
			$parentState = $this->getState();
			$localContext = new Context\ProdContext($this->ctx, $parentState);
			$previousContext = $localContext;
			$startState = 30;
			$this->enterRecursionRule($localContext, 30, self::RULE_prod, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$localContext = new Context\ProductExpressionContext($localContext);
				$this->ctx = $localContext;
				$previousContext = $localContext;

				$this->setState(256);
				$this->unary();
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(263);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 23, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$localContext = new Context\ProductExpressionContext(new Context\ProdContext($parentContext, $parentState));
						$this->pushNewRecursionContext($localContext, $startState, self::RULE_prod);
						$this->setState(258);

						if (!($this->precpred($this->ctx, 2))) {
						    throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 2)");
						}
						$this->setState(259);

						$localContext->op = $this->input->LT(1);
						$_la = $this->input->LA(1);

						if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 422246824804352) !== 0))) {
							    $localContext->op = $this->errorHandler->recoverInline($this);
						} else {
							if ($this->input->LA(1) === Token::EOF) {
							    $this->matchedEOF = true;
						    }

							$this->errorHandler->reportMatch($this);
							$this->consume();
						}
						$this->setState(260);
						$this->unary(); 
					}

					$this->setState(265);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 23, $this->ctx);
				}
			} catch (RecognitionException $exception) {
				$localContext->exception = $exception;
				$this->errorHandler->reportError($this, $exception);
				$this->errorHandler->recover($this, $exception);
			} finally {
				$this->unrollRecursionContexts($parentContext);
			}

			return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function unary(): Context\UnaryContext
		{
		    $localContext = new Context\UnaryContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 32, self::RULE_unary);

		    try {
		        $this->setState(271);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::T__2:
		            case self::T__20:
		            case self::T__35:
		            case self::T__50:
		            case self::T__51:
		            case self::T__52:
		            case self::T__53:
		            case self::FLOAT:
		            case self::INT:
		            case self::ID:
		            case self::STRING:
		            case self::RUNE:
		            	$localContext = new Context\PrimaryExpressionContext($localContext);
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(266);
		            	$this->primary();
		            	break;

		            case self::T__45:
		            	$localContext = new Context\UnaryExpressionContext($localContext);
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(267);
		            	$this->match(self::T__45);
		            	$this->setState(268);
		            	$this->unary();
		            	break;

		            case self::T__48:
		            	$localContext = new Context\UnaryExpressionContext($localContext);
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(269);
		            	$this->match(self::T__48);
		            	$this->setState(270);
		            	$this->unary();
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function arrayRow(): Context\ArrayRowContext
		{
		    $localContext = new Context\ArrayRowContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 34, self::RULE_arrayRow);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(273);
		        $this->match(self::T__22);
		        $this->setState(274);
		        $this->e();
		        $this->setState(279);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__49) {
		        	$this->setState(275);
		        	$this->match(self::T__49);
		        	$this->setState(276);
		        	$this->e();
		        	$this->setState(281);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(282);
		        $this->match(self::T__23);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function primary(): Context\PrimaryContext
		{
		    $localContext = new Context\PrimaryContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 36, self::RULE_primary);

		    try {
		        $this->setState(373);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 34, $this->ctx)) {
		        	case 1:
		        	    $localContext = new Context\GroupedExpressionContext($localContext);
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(284);
		        	    $this->match(self::T__2);
		        	    $this->setState(285);
		        	    $this->e();
		        	    $this->setState(286);
		        	    $this->match(self::T__3);
		        	break;

		        	case 2:
		        	    $localContext = new Context\FloatExpressionContext($localContext);
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(288);
		        	    $this->match(self::FLOAT);
		        	break;

		        	case 3:
		        	    $localContext = new Context\IntExpressionContext($localContext);
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(289);
		        	    $this->match(self::INT);
		        	break;

		        	case 4:
		        	    $localContext = new Context\RuneExpressionContext($localContext);
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(290);
		        	    $this->match(self::RUNE);
		        	break;

		        	case 5:
		        	    $localContext = new Context\StringExpressionContext($localContext);
		        	    $this->enterOuterAlt($localContext, 5);
		        	    $this->setState(291);
		        	    $this->match(self::STRING);
		        	break;

		        	case 6:
		        	    $localContext = new Context\ReferenceExpressionContext($localContext);
		        	    $this->enterOuterAlt($localContext, 6);
		        	    $this->setState(292);
		        	    $this->match(self::ID);
		        	break;

		        	case 7:
		        	    $localContext = new Context\BoolExpressionContext($localContext);
		        	    $this->enterOuterAlt($localContext, 7);
		        	    $this->setState(293);

		        	    $localContext->bool = $this->input->LT(1);
		        	    $_la = $this->input->LA(1);

		        	    if (!($_la === self::T__50 || $_la === self::T__51)) {
		        	    	    $localContext->bool = $this->errorHandler->recoverInline($this);
		        	    } else {
		        	    	if ($this->input->LA(1) === Token::EOF) {
		        	    	    $this->matchedEOF = true;
		        	        }

		        	    	$this->errorHandler->reportMatch($this);
		        	    	$this->consume();
		        	    }
		        	break;

		        	case 8:
		        	    $localContext = new Context\NilExpressionContext($localContext);
		        	    $this->enterOuterAlt($localContext, 8);
		        	    $this->setState(294);
		        	    $this->match(self::T__52);
		        	break;

		        	case 9:
		        	    $localContext = new Context\FunctionCallExpressionContext($localContext);
		        	    $this->enterOuterAlt($localContext, 9);
		        	    $this->setState(295);
		        	    $this->match(self::ID);
		        	    $this->setState(296);
		        	    $this->match(self::T__2);
		        	    $this->setState(298);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 2880685349122605064) !== 0)) {
		        	    	$this->setState(297);
		        	    	$this->args();
		        	    }
		        	    $this->setState(300);
		        	    $this->match(self::T__3);
		        	break;

		        	case 10:
		        	    $localContext = new Context\ArrayExpressionContext($localContext);
		        	    $this->enterOuterAlt($localContext, 10);
		        	    $this->setState(301);
		        	    $this->match(self::T__20);
		        	    $this->setState(302);
		        	    $this->e();
		        	    $this->setState(307);
		        	    $this->errorHandler->sync($this);

		        	    $_la = $this->input->LA(1);
		        	    while ($_la === self::T__49) {
		        	    	$this->setState(303);
		        	    	$this->match(self::T__49);
		        	    	$this->setState(304);
		        	    	$this->e();
		        	    	$this->setState(309);
		        	    	$this->errorHandler->sync($this);
		        	    	$_la = $this->input->LA(1);
		        	    }
		        	    $this->setState(310);
		        	    $this->match(self::T__21);
		        	break;

		        	case 11:
		        	    $localContext = new Context\ReferenceValueExpressionContext($localContext);
		        	    $this->enterOuterAlt($localContext, 11);
		        	    $this->setState(312);
		        	    $this->match(self::T__53);
		        	    $this->setState(313);
		        	    $this->match(self::ID);
		        	break;

		        	case 12:
		        	    $localContext = new Context\ReferenceArrayExpressionContext($localContext);
		        	    $this->enterOuterAlt($localContext, 12);
		        	    $this->setState(314);
		        	    $this->match(self::T__53);
		        	    $this->setState(315);
		        	    $this->match(self::ID);
		        	    $this->setState(320); 
		        	    $this->errorHandler->sync($this);

		        	    $alt = 1;

		        	    do {
		        	    	switch ($alt) {
		        	    	case 1:
		        	    		$this->setState(316);
		        	    		$this->match(self::T__20);
		        	    		$this->setState(317);
		        	    		$this->e();
		        	    		$this->setState(318);
		        	    		$this->match(self::T__21);
		        	    		break;
		        	    	default:
		        	    		throw new NoViableAltException($this);
		        	    	}

		        	    	$this->setState(322); 
		        	    	$this->errorHandler->sync($this);

		        	    	$alt = $this->getInterpreter()->adaptivePredict($this->input, 28, $this->ctx);
		        	    } while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER);
		        	break;

		        	case 13:
		        	    $localContext = new Context\ArrayAccessExpressionContext($localContext);
		        	    $this->enterOuterAlt($localContext, 13);
		        	    $this->setState(324);
		        	    $this->match(self::ID);
		        	    $this->setState(329); 
		        	    $this->errorHandler->sync($this);

		        	    $alt = 1;

		        	    do {
		        	    	switch ($alt) {
		        	    	case 1:
		        	    		$this->setState(325);
		        	    		$this->match(self::T__20);
		        	    		$this->setState(326);
		        	    		$this->e();
		        	    		$this->setState(327);
		        	    		$this->match(self::T__21);
		        	    		break;
		        	    	default:
		        	    		throw new NoViableAltException($this);
		        	    	}

		        	    	$this->setState(331); 
		        	    	$this->errorHandler->sync($this);

		        	    	$alt = $this->getInterpreter()->adaptivePredict($this->input, 29, $this->ctx);
		        	    } while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER);
		        	break;

		        	case 14:
		        	    $localContext = new Context\SliceInitExpressionContext($localContext);
		        	    $this->enterOuterAlt($localContext, 14);
		        	    $this->setState(333);
		        	    $this->match(self::T__35);
		        	    $this->setState(334);
		        	    $this->type();
		        	    $this->setState(335);
		        	    $this->match(self::T__22);
		        	    $this->setState(336);
		        	    $this->e();
		        	    $this->setState(341);
		        	    $this->errorHandler->sync($this);

		        	    $_la = $this->input->LA(1);
		        	    while ($_la === self::T__49) {
		        	    	$this->setState(337);
		        	    	$this->match(self::T__49);
		        	    	$this->setState(338);
		        	    	$this->e();
		        	    	$this->setState(343);
		        	    	$this->errorHandler->sync($this);
		        	    	$_la = $this->input->LA(1);
		        	    }
		        	    $this->setState(344);
		        	    $this->match(self::T__23);
		        	break;

		        	case 15:
		        	    $localContext = new Context\ArrayInitExpressionContext($localContext);
		        	    $this->enterOuterAlt($localContext, 15);
		        	    $this->setState(346);
		        	    $this->arrayType();
		        	    $this->setState(347);
		        	    $this->match(self::T__22);
		        	    $this->setState(348);
		        	    $this->e();
		        	    $this->setState(353);
		        	    $this->errorHandler->sync($this);

		        	    $_la = $this->input->LA(1);
		        	    while ($_la === self::T__49) {
		        	    	$this->setState(349);
		        	    	$this->match(self::T__49);
		        	    	$this->setState(350);
		        	    	$this->e();
		        	    	$this->setState(355);
		        	    	$this->errorHandler->sync($this);
		        	    	$_la = $this->input->LA(1);
		        	    }
		        	    $this->setState(356);
		        	    $this->match(self::T__23);
		        	break;

		        	case 16:
		        	    $localContext = new Context\MatrixInitExpressionContext($localContext);
		        	    $this->enterOuterAlt($localContext, 16);
		        	    $this->setState(358);
		        	    $this->arrayType();
		        	    $this->setState(359);
		        	    $this->match(self::T__22);
		        	    $this->setState(360);
		        	    $this->arrayRow();
		        	    $this->setState(365);
		        	    $this->errorHandler->sync($this);

		        	    $alt = $this->getInterpreter()->adaptivePredict($this->input, 32, $this->ctx);

		        	    while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
		        	    	if ($alt === 1) {
		        	    		$this->setState(361);
		        	    		$this->match(self::T__49);
		        	    		$this->setState(362);
		        	    		$this->arrayRow(); 
		        	    	}

		        	    	$this->setState(367);
		        	    	$this->errorHandler->sync($this);

		        	    	$alt = $this->getInterpreter()->adaptivePredict($this->input, 32, $this->ctx);
		        	    }
		        	    $this->setState(369);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if ($_la === self::T__49) {
		        	    	$this->setState(368);
		        	    	$this->match(self::T__49);
		        	    }
		        	    $this->setState(371);
		        	    $this->match(self::T__23);
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function params(): Context\ParamsContext
		{
		    $localContext = new Context\ParamsContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 38, self::RULE_params);

		    try {
		        $localContext = new Context\ParameterListContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(375);
		        $this->param();
		        $this->setState(380);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__49) {
		        	$this->setState(376);
		        	$this->match(self::T__49);
		        	$this->setState(377);
		        	$this->param();
		        	$this->setState(382);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function param(): Context\ParamContext
		{
		    $localContext = new Context\ParamContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 40, self::RULE_param);

		    try {
		        $localContext = new Context\ParamDeclContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(383);
		        $this->match(self::ID);
		        $this->setState(386);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::T__20:
		            	$this->setState(384);
		            	$this->arrayType();
		            	break;

		            case self::T__29:
		            case self::T__30:
		            case self::T__31:
		            case self::T__32:
		            case self::T__33:
		            case self::T__34:
		            case self::T__35:
		            	$this->setState(385);
		            	$this->type();
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function returnSpec(): Context\ReturnSpecContext
		{
		    $localContext = new Context\ReturnSpecContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 42, self::RULE_returnSpec);

		    try {
		        $this->setState(401);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::T__29:
		            case self::T__30:
		            case self::T__31:
		            case self::T__32:
		            case self::T__33:
		            case self::T__34:
		            case self::T__35:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(388);
		            	$this->type();
		            	break;

		            case self::T__20:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(389);
		            	$this->arrayType();
		            	break;

		            case self::T__2:
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(390);
		            	$this->match(self::T__2);
		            	$this->setState(391);
		            	$this->returnType();
		            	$this->setState(396);
		            	$this->errorHandler->sync($this);

		            	$_la = $this->input->LA(1);
		            	while ($_la === self::T__49) {
		            		$this->setState(392);
		            		$this->match(self::T__49);
		            		$this->setState(393);
		            		$this->returnType();
		            		$this->setState(398);
		            		$this->errorHandler->sync($this);
		            		$_la = $this->input->LA(1);
		            	}
		            	$this->setState(399);
		            	$this->match(self::T__3);
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function returnType(): Context\ReturnTypeContext
		{
		    $localContext = new Context\ReturnTypeContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 44, self::RULE_returnType);

		    try {
		        $this->setState(405);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::T__29:
		            case self::T__30:
		            case self::T__31:
		            case self::T__32:
		            case self::T__33:
		            case self::T__34:
		            case self::T__35:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(403);
		            	$this->type();
		            	break;

		            case self::T__20:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(404);
		            	$this->arrayType();
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function args(): Context\ArgsContext
		{
		    $localContext = new Context\ArgsContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 46, self::RULE_args);

		    try {
		        $localContext = new Context\ArgumentListContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(407);
		        $this->e();
		        $this->setState(412);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__49) {
		        	$this->setState(408);
		        	$this->match(self::T__49);
		        	$this->setState(409);
		        	$this->e();
		        	$this->setState(414);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function idList(): Context\IdListContext
		{
		    $localContext = new Context\IdListContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 48, self::RULE_idList);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(415);
		        $this->match(self::ID);
		        $this->setState(420);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__49) {
		        	$this->setState(416);
		        	$this->match(self::T__49);
		        	$this->setState(417);
		        	$this->match(self::ID);
		        	$this->setState(422);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		public function sempred(?RuleContext $localContext, int $ruleIndex, int $predicateIndex): bool
		{
			switch ($ruleIndex) {
					case 10:
						return $this->sempredLogic($localContext, $predicateIndex);

					case 11:
						return $this->sempredAndExpr($localContext, $predicateIndex);

					case 14:
						return $this->sempredAdd($localContext, $predicateIndex);

					case 15:
						return $this->sempredProd($localContext, $predicateIndex);

				default:
					return true;
				}
		}

		private function sempredLogic(?Context\LogicContext $localContext, int $predicateIndex): bool
		{
			switch ($predicateIndex) {
			    case 0:
			        return $this->precpred($this->ctx, 2);
			}

			return true;
		}

		private function sempredAndExpr(?Context\AndExprContext $localContext, int $predicateIndex): bool
		{
			switch ($predicateIndex) {
			    case 1:
			        return $this->precpred($this->ctx, 2);
			}

			return true;
		}

		private function sempredAdd(?Context\AddContext $localContext, int $predicateIndex): bool
		{
			switch ($predicateIndex) {
			    case 2:
			        return $this->precpred($this->ctx, 2);
			}

			return true;
		}

		private function sempredProd(?Context\ProdContext $localContext, int $predicateIndex): bool
		{
			switch ($predicateIndex) {
			    case 3:
			        return $this->precpred($this->ctx, 2);
			}

			return true;
		}
	}
}

namespace Context {
	use Antlr\Antlr4\Runtime\ParserRuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;
	use Antlr\Antlr4\Runtime\Tree\TerminalNode;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
	use GrammarParser;
	use GrammarVisitor;
	use GrammarListener;

	class PContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_p;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class ProgramContext extends PContext
	{
		public function __construct(PContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function EOF(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::EOF, 0);
	    }

	    /**
	     * @return array<StmtContext>|StmtContext|null
	     */
	    public function stmt(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(StmtContext::class);
	    	}

	        return $this->getTypedRuleContext(StmtContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterProgram($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitProgram($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitProgram($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class StmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_stmt;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class ShortVarDeclarationContext extends StmtContext
	{
		public function __construct(StmtContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function idList(): ?IdListContext
	    {
	    	return $this->getTypedRuleContext(IdListContext::class, 0);
	    }

	    public function args(): ?ArgsContext
	    {
	    	return $this->getTypedRuleContext(ArgsContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterShortVarDeclaration($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitShortVarDeclaration($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitShortVarDeclaration($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class InfiniteForStatementContext extends StmtContext
	{
		public function __construct(StmtContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function block(): ?BlockContext
	    {
	    	return $this->getTypedRuleContext(BlockContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterInfiniteForStatement($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitInfiniteForStatement($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitInfiniteForStatement($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class IncrementStatementContext extends StmtContext
	{
		public function __construct(StmtContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::ID, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterIncrementStatement($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitIncrementStatement($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitIncrementStatement($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class WhileStatementContext extends StmtContext
	{
		public function __construct(StmtContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function e(): ?EContext
	    {
	    	return $this->getTypedRuleContext(EContext::class, 0);
	    }

	    public function block(): ?BlockContext
	    {
	    	return $this->getTypedRuleContext(BlockContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterWhileStatement($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitWhileStatement($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitWhileStatement($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ForClassicStatementContext extends StmtContext
	{
		/**
		 * @var StmtContext|null $init
		 */
		public $init;

		/**
		 * @var EContext|null $cond
		 */
		public $cond;

		/**
		 * @var StmtContext|null $update
		 */
		public $update;

		public function __construct(StmtContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function block(): ?BlockContext
	    {
	    	return $this->getTypedRuleContext(BlockContext::class, 0);
	    }

	    /**
	     * @return array<StmtContext>|StmtContext|null
	     */
	    public function stmt(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(StmtContext::class);
	    	}

	        return $this->getTypedRuleContext(StmtContext::class, $index);
	    }

	    public function e(): ?EContext
	    {
	    	return $this->getTypedRuleContext(EContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterForClassicStatement($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitForClassicStatement($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitForClassicStatement($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ConstDeclarationContext extends StmtContext
	{
		public function __construct(StmtContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::ID, 0);
	    }

	    public function type(): ?TypeContext
	    {
	    	return $this->getTypedRuleContext(TypeContext::class, 0);
	    }

	    public function e(): ?EContext
	    {
	    	return $this->getTypedRuleContext(EContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterConstDeclaration($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitConstDeclaration($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitConstDeclaration($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class VarDeclarationContext extends StmtContext
	{
		public function __construct(StmtContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function idList(): ?IdListContext
	    {
	    	return $this->getTypedRuleContext(IdListContext::class, 0);
	    }

	    public function arrayType(): ?ArrayTypeContext
	    {
	    	return $this->getTypedRuleContext(ArrayTypeContext::class, 0);
	    }

	    public function type(): ?TypeContext
	    {
	    	return $this->getTypedRuleContext(TypeContext::class, 0);
	    }

	    public function args(): ?ArgsContext
	    {
	    	return $this->getTypedRuleContext(ArgsContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterVarDeclaration($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitVarDeclaration($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitVarDeclaration($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class BreakStatementContext extends StmtContext
	{
		public function __construct(StmtContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterBreakStatement($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitBreakStatement($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitBreakStatement($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class IfStatementContext extends StmtContext
	{
		public function __construct(StmtContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function e(): ?EContext
	    {
	    	return $this->getTypedRuleContext(EContext::class, 0);
	    }

	    public function block(): ?BlockContext
	    {
	    	return $this->getTypedRuleContext(BlockContext::class, 0);
	    }

	    public function elseStmt(): ?ElseStmtContext
	    {
	    	return $this->getTypedRuleContext(ElseStmtContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterIfStatement($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitIfStatement($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitIfStatement($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class FunctionDeclarationContext extends StmtContext
	{
		public function __construct(StmtContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::ID, 0);
	    }

	    public function block(): ?BlockContext
	    {
	    	return $this->getTypedRuleContext(BlockContext::class, 0);
	    }

	    public function params(): ?ParamsContext
	    {
	    	return $this->getTypedRuleContext(ParamsContext::class, 0);
	    }

	    public function returnSpec(): ?ReturnSpecContext
	    {
	    	return $this->getTypedRuleContext(ReturnSpecContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterFunctionDeclaration($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitFunctionDeclaration($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitFunctionDeclaration($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class SwitchStatementContext extends StmtContext
	{
		public function __construct(StmtContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function switchStmt(): ?SwitchStmtContext
	    {
	    	return $this->getTypedRuleContext(SwitchStmtContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterSwitchStatement($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitSwitchStatement($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitSwitchStatement($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class AssignmentStatementContext extends StmtContext
	{
		/**
		 * @var Token|null $op
		 */
		public $op;

		public function __construct(StmtContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::ID, 0);
	    }

	    public function e(): ?EContext
	    {
	    	return $this->getTypedRuleContext(EContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterAssignmentStatement($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitAssignmentStatement($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitAssignmentStatement($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class PrintStatementContext extends StmtContext
	{
		public function __construct(StmtContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function args(): ?ArgsContext
	    {
	    	return $this->getTypedRuleContext(ArgsContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterPrintStatement($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitPrintStatement($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitPrintStatement($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ReturnStatementContext extends StmtContext
	{
		public function __construct(StmtContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function args(): ?ArgsContext
	    {
	    	return $this->getTypedRuleContext(ArgsContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterReturnStatement($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitReturnStatement($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitReturnStatement($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class FunctionCallStatementContext extends StmtContext
	{
		public function __construct(StmtContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::ID, 0);
	    }

	    public function args(): ?ArgsContext
	    {
	    	return $this->getTypedRuleContext(ArgsContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterFunctionCallStatement($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitFunctionCallStatement($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitFunctionCallStatement($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ArrayAssignmentStatementContext extends StmtContext
	{
		/**
		 * @var EContext|null $e
		 */
		public $e;

		/**
		 * @var EContext|null $assign
		 */
		public $assign;

		/**
		 * @var array<EContext>|null $index
		 */
		public $index;

		public function __construct(StmtContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::ID, 0);
	    }

	    /**
	     * @return array<EContext>|EContext|null
	     */
	    public function e(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(EContext::class);
	    	}

	        return $this->getTypedRuleContext(EContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterArrayAssignmentStatement($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitArrayAssignmentStatement($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitArrayAssignmentStatement($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ContinueStatementContext extends StmtContext
	{
		public function __construct(StmtContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterContinueStatement($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitContinueStatement($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitContinueStatement($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class BlockContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_block;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class BlockStatementContext extends BlockContext
	{
		public function __construct(BlockContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<StmtContext>|StmtContext|null
	     */
	    public function stmt(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(StmtContext::class);
	    	}

	        return $this->getTypedRuleContext(StmtContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterBlockStatement($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitBlockStatement($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitBlockStatement($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ElseStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_elseStmt;
	    }

	    public function block(): ?BlockContext
	    {
	    	return $this->getTypedRuleContext(BlockContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterElseStmt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitElseStmt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitElseStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class SwitchStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_switchStmt;
	    }

	    public function e(): ?EContext
	    {
	    	return $this->getTypedRuleContext(EContext::class, 0);
	    }

	    /**
	     * @return array<CaseStmtContext>|CaseStmtContext|null
	     */
	    public function caseStmt(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(CaseStmtContext::class);
	    	}

	        return $this->getTypedRuleContext(CaseStmtContext::class, $index);
	    }

	    public function defaultStmt(): ?DefaultStmtContext
	    {
	    	return $this->getTypedRuleContext(DefaultStmtContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterSwitchStmt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitSwitchStmt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitSwitchStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class CaseStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_caseStmt;
	    }

	    public function e(): ?EContext
	    {
	    	return $this->getTypedRuleContext(EContext::class, 0);
	    }

	    /**
	     * @return array<StmtContext>|StmtContext|null
	     */
	    public function stmt(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(StmtContext::class);
	    	}

	        return $this->getTypedRuleContext(StmtContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterCaseStmt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitCaseStmt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitCaseStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class DefaultStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_defaultStmt;
	    }

	    /**
	     * @return array<StmtContext>|StmtContext|null
	     */
	    public function stmt(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(StmtContext::class);
	    	}

	        return $this->getTypedRuleContext(StmtContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterDefaultStmt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitDefaultStmt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitDefaultStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class TypeContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_type;
	    }

	    public function type(): ?TypeContext
	    {
	    	return $this->getTypedRuleContext(TypeContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterType($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitType($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitType($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ArrayTypeContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_arrayType;
	    }

	    public function type(): ?TypeContext
	    {
	    	return $this->getTypedRuleContext(TypeContext::class, 0);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function INT(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GrammarParser::INT);
	    	}

	        return $this->getToken(GrammarParser::INT, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterArrayType($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitArrayType($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitArrayType($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class EContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_e;
	    }

	    public function logic(): ?LogicContext
	    {
	    	return $this->getTypedRuleContext(LogicContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterE($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitE($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitE($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class LogicContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_logic;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class OrExpressionContext extends LogicContext
	{
		public function __construct(LogicContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function andExpr(): ?AndExprContext
	    {
	    	return $this->getTypedRuleContext(AndExprContext::class, 0);
	    }

	    public function logic(): ?LogicContext
	    {
	    	return $this->getTypedRuleContext(LogicContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterOrExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitOrExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitOrExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class AndExprContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_andExpr;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class AndExpressionContext extends AndExprContext
	{
		public function __construct(AndExprContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function eq(): ?EqContext
	    {
	    	return $this->getTypedRuleContext(EqContext::class, 0);
	    }

	    public function andExpr(): ?AndExprContext
	    {
	    	return $this->getTypedRuleContext(AndExprContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterAndExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitAndExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitAndExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class EqContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_eq;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class EqualityExpressionContext extends EqContext
	{
		/**
		 * @var IneqContext|null $left
		 */
		public $left;

		/**
		 * @var IneqContext|null $right
		 */
		public $right;

		public function __construct(EqContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<IneqContext>|IneqContext|null
	     */
	    public function ineq(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(IneqContext::class);
	    	}

	        return $this->getTypedRuleContext(IneqContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterEqualityExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitEqualityExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitEqualityExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class IneqContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_ineq;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class InequalityExpressionContext extends IneqContext
	{
		/**
		 * @var Token|null $op
		 */
		public $op;

		/**
		 * @var AddContext|null $left
		 */
		public $left;

		/**
		 * @var AddContext|null $right
		 */
		public $right;

		public function __construct(IneqContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<AddContext>|AddContext|null
	     */
	    public function add(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(AddContext::class);
	    	}

	        return $this->getTypedRuleContext(AddContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterInequalityExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitInequalityExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitInequalityExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class AddContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_add;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class AddExpressionContext extends AddContext
	{
		/**
		 * @var Token|null $op
		 */
		public $op;

		public function __construct(AddContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function prod(): ?ProdContext
	    {
	    	return $this->getTypedRuleContext(ProdContext::class, 0);
	    }

	    public function add(): ?AddContext
	    {
	    	return $this->getTypedRuleContext(AddContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterAddExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitAddExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitAddExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ProdContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_prod;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class ProductExpressionContext extends ProdContext
	{
		/**
		 * @var Token|null $op
		 */
		public $op;

		public function __construct(ProdContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function unary(): ?UnaryContext
	    {
	    	return $this->getTypedRuleContext(UnaryContext::class, 0);
	    }

	    public function prod(): ?ProdContext
	    {
	    	return $this->getTypedRuleContext(ProdContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterProductExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitProductExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitProductExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class UnaryContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_unary;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class PrimaryExpressionContext extends UnaryContext
	{
		public function __construct(UnaryContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function primary(): ?PrimaryContext
	    {
	    	return $this->getTypedRuleContext(PrimaryContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterPrimaryExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitPrimaryExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitPrimaryExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class UnaryExpressionContext extends UnaryContext
	{
		public function __construct(UnaryContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function unary(): ?UnaryContext
	    {
	    	return $this->getTypedRuleContext(UnaryContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterUnaryExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitUnaryExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitUnaryExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ArrayRowContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_arrayRow;
	    }

	    /**
	     * @return array<EContext>|EContext|null
	     */
	    public function e(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(EContext::class);
	    	}

	        return $this->getTypedRuleContext(EContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterArrayRow($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitArrayRow($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitArrayRow($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class PrimaryContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_primary;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class IntExpressionContext extends PrimaryContext
	{
		public function __construct(PrimaryContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function INT(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::INT, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterIntExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitIntExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitIntExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class MatrixInitExpressionContext extends PrimaryContext
	{
		public function __construct(PrimaryContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function arrayType(): ?ArrayTypeContext
	    {
	    	return $this->getTypedRuleContext(ArrayTypeContext::class, 0);
	    }

	    /**
	     * @return array<ArrayRowContext>|ArrayRowContext|null
	     */
	    public function arrayRow(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ArrayRowContext::class);
	    	}

	        return $this->getTypedRuleContext(ArrayRowContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterMatrixInitExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitMatrixInitExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitMatrixInitExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class FloatExpressionContext extends PrimaryContext
	{
		public function __construct(PrimaryContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function FLOAT(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::FLOAT, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterFloatExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitFloatExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitFloatExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class GroupedExpressionContext extends PrimaryContext
	{
		public function __construct(PrimaryContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function e(): ?EContext
	    {
	    	return $this->getTypedRuleContext(EContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterGroupedExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitGroupedExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitGroupedExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class FunctionCallExpressionContext extends PrimaryContext
	{
		public function __construct(PrimaryContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::ID, 0);
	    }

	    public function args(): ?ArgsContext
	    {
	    	return $this->getTypedRuleContext(ArgsContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterFunctionCallExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitFunctionCallExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitFunctionCallExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ArrayInitExpressionContext extends PrimaryContext
	{
		public function __construct(PrimaryContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function arrayType(): ?ArrayTypeContext
	    {
	    	return $this->getTypedRuleContext(ArrayTypeContext::class, 0);
	    }

	    /**
	     * @return array<EContext>|EContext|null
	     */
	    public function e(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(EContext::class);
	    	}

	        return $this->getTypedRuleContext(EContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterArrayInitExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitArrayInitExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitArrayInitExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class BoolExpressionContext extends PrimaryContext
	{
		/**
		 * @var Token|null $bool
		 */
		public $bool;

		public function __construct(PrimaryContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterBoolExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitBoolExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitBoolExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class StringExpressionContext extends PrimaryContext
	{
		public function __construct(PrimaryContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function STRING(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::STRING, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterStringExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitStringExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitStringExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ReferenceArrayExpressionContext extends PrimaryContext
	{
		public function __construct(PrimaryContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::ID, 0);
	    }

	    /**
	     * @return array<EContext>|EContext|null
	     */
	    public function e(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(EContext::class);
	    	}

	        return $this->getTypedRuleContext(EContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterReferenceArrayExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitReferenceArrayExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitReferenceArrayExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class NilExpressionContext extends PrimaryContext
	{
		public function __construct(PrimaryContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterNilExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitNilExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitNilExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ReferenceExpressionContext extends PrimaryContext
	{
		public function __construct(PrimaryContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::ID, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterReferenceExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitReferenceExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitReferenceExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ArrayExpressionContext extends PrimaryContext
	{
		public function __construct(PrimaryContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<EContext>|EContext|null
	     */
	    public function e(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(EContext::class);
	    	}

	        return $this->getTypedRuleContext(EContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterArrayExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitArrayExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitArrayExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ReferenceValueExpressionContext extends PrimaryContext
	{
		public function __construct(PrimaryContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::ID, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterReferenceValueExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitReferenceValueExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitReferenceValueExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class RuneExpressionContext extends PrimaryContext
	{
		public function __construct(PrimaryContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function RUNE(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::RUNE, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterRuneExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitRuneExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitRuneExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ArrayAccessExpressionContext extends PrimaryContext
	{
		public function __construct(PrimaryContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::ID, 0);
	    }

	    /**
	     * @return array<EContext>|EContext|null
	     */
	    public function e(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(EContext::class);
	    	}

	        return $this->getTypedRuleContext(EContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterArrayAccessExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitArrayAccessExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitArrayAccessExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class SliceInitExpressionContext extends PrimaryContext
	{
		public function __construct(PrimaryContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function type(): ?TypeContext
	    {
	    	return $this->getTypedRuleContext(TypeContext::class, 0);
	    }

	    /**
	     * @return array<EContext>|EContext|null
	     */
	    public function e(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(EContext::class);
	    	}

	        return $this->getTypedRuleContext(EContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterSliceInitExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitSliceInitExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitSliceInitExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ParamsContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_params;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class ParameterListContext extends ParamsContext
	{
		public function __construct(ParamsContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ParamContext>|ParamContext|null
	     */
	    public function param(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ParamContext::class);
	    	}

	        return $this->getTypedRuleContext(ParamContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterParameterList($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitParameterList($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitParameterList($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ParamContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_param;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class ParamDeclContext extends ParamContext
	{
		public function __construct(ParamContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::ID, 0);
	    }

	    public function arrayType(): ?ArrayTypeContext
	    {
	    	return $this->getTypedRuleContext(ArrayTypeContext::class, 0);
	    }

	    public function type(): ?TypeContext
	    {
	    	return $this->getTypedRuleContext(TypeContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterParamDecl($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitParamDecl($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitParamDecl($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ReturnSpecContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_returnSpec;
	    }

	    public function type(): ?TypeContext
	    {
	    	return $this->getTypedRuleContext(TypeContext::class, 0);
	    }

	    public function arrayType(): ?ArrayTypeContext
	    {
	    	return $this->getTypedRuleContext(ArrayTypeContext::class, 0);
	    }

	    /**
	     * @return array<ReturnTypeContext>|ReturnTypeContext|null
	     */
	    public function returnType(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ReturnTypeContext::class);
	    	}

	        return $this->getTypedRuleContext(ReturnTypeContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterReturnSpec($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitReturnSpec($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitReturnSpec($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ReturnTypeContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_returnType;
	    }

	    public function type(): ?TypeContext
	    {
	    	return $this->getTypedRuleContext(TypeContext::class, 0);
	    }

	    public function arrayType(): ?ArrayTypeContext
	    {
	    	return $this->getTypedRuleContext(ArrayTypeContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterReturnType($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitReturnType($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitReturnType($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ArgsContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_args;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class ArgumentListContext extends ArgsContext
	{
		public function __construct(ArgsContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<EContext>|EContext|null
	     */
	    public function e(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(EContext::class);
	    	}

	        return $this->getTypedRuleContext(EContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterArgumentList($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitArgumentList($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitArgumentList($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class IdListContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_idList;
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function ID(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GrammarParser::ID);
	    	}

	        return $this->getToken(GrammarParser::ID, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterIdList($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitIdList($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitIdList($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 
}