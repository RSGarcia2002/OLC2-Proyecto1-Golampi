// Generated from /home/randall/Escritorio/golampi/Grammar.g4 by ANTLR 4.13.1
import org.antlr.v4.runtime.atn.*;
import org.antlr.v4.runtime.dfa.DFA;
import org.antlr.v4.runtime.*;
import org.antlr.v4.runtime.misc.*;
import org.antlr.v4.runtime.tree.*;
import java.util.List;
import java.util.Iterator;
import java.util.ArrayList;

@SuppressWarnings({"all", "warnings", "unchecked", "unused", "cast", "CheckReturnValue"})
public class GrammarParser extends Parser {
	static { RuntimeMetaData.checkVersion("4.13.1", RuntimeMetaData.VERSION); }

	protected static final DFA[] _decisionToDFA;
	protected static final PredictionContextCache _sharedContextCache =
		new PredictionContextCache();
	public static final int
		T__0=1, T__1=2, T__2=3, T__3=4, T__4=5, T__5=6, T__6=7, T__7=8, T__8=9, 
		T__9=10, T__10=11, T__11=12, T__12=13, T__13=14, T__14=15, T__15=16, T__16=17, 
		T__17=18, T__18=19, T__19=20, T__20=21, T__21=22, T__22=23, T__23=24, 
		T__24=25, T__25=26, T__26=27, T__27=28, T__28=29, T__29=30, T__30=31, 
		T__31=32, T__32=33, T__33=34, T__34=35, T__35=36, T__36=37, T__37=38, 
		T__38=39, T__39=40, T__40=41, T__41=42, T__42=43, T__43=44, T__44=45, 
		T__45=46, T__46=47, T__47=48, T__48=49, T__49=50, T__50=51, T__51=52, 
		T__52=53, T__53=54, FLOAT=55, INT=56, ID=57, STRING=58, LINE_COMMENT=59, 
		MULTI_COMMENT=60, RUNE=61, WS=62;
	public static final int
		RULE_p = 0, RULE_stmt = 1, RULE_block = 2, RULE_elseStmt = 3, RULE_switchStmt = 4, 
		RULE_caseStmt = 5, RULE_defaultStmt = 6, RULE_type = 7, RULE_arrayType = 8, 
		RULE_e = 9, RULE_logic = 10, RULE_andExpr = 11, RULE_eq = 12, RULE_ineq = 13, 
		RULE_add = 14, RULE_prod = 15, RULE_unary = 16, RULE_arrayRow = 17, RULE_primary = 18, 
		RULE_params = 19, RULE_param = 20, RULE_returnSpec = 21, RULE_returnType = 22, 
		RULE_args = 23, RULE_idList = 24;
	private static String[] makeRuleNames() {
		return new String[] {
			"p", "stmt", "block", "elseStmt", "switchStmt", "caseStmt", "defaultStmt", 
			"type", "arrayType", "e", "logic", "andExpr", "eq", "ineq", "add", "prod", 
			"unary", "arrayRow", "primary", "params", "param", "returnSpec", "returnType", 
			"args", "idList"
		};
	}
	public static final String[] ruleNames = makeRuleNames();

	private static String[] makeLiteralNames() {
		return new String[] {
			null, "'print'", "'fmt.Println'", "'('", "')'", "'var'", "'='", "'const'", 
			"':='", "'+='", "'-='", "'*='", "'/='", "'++'", "'if'", "'for'", "';'", 
			"'continue'", "'break'", "'return'", "'func'", "'['", "']'", "'{'", "'}'", 
			"'else'", "'switch'", "'case'", "':'", "'default'", "'int32'", "'float32'", 
			"'bool'", "'rune'", "'string'", "'*'", "'[]'", "'||'", "'&&'", "'=='", 
			"'>'", "'<'", "'>='", "'<='", "'!='", "'+'", "'-'", "'/'", "'%'", "'!'", 
			"','", "'true'", "'false'", "'nil'", "'&'"
		};
	}
	private static final String[] _LITERAL_NAMES = makeLiteralNames();
	private static String[] makeSymbolicNames() {
		return new String[] {
			null, null, null, null, null, null, null, null, null, null, null, null, 
			null, null, null, null, null, null, null, null, null, null, null, null, 
			null, null, null, null, null, null, null, null, null, null, null, null, 
			null, null, null, null, null, null, null, null, null, null, null, null, 
			null, null, null, null, null, null, null, "FLOAT", "INT", "ID", "STRING", 
			"LINE_COMMENT", "MULTI_COMMENT", "RUNE", "WS"
		};
	}
	private static final String[] _SYMBOLIC_NAMES = makeSymbolicNames();
	public static final Vocabulary VOCABULARY = new VocabularyImpl(_LITERAL_NAMES, _SYMBOLIC_NAMES);

	/**
	 * @deprecated Use {@link #VOCABULARY} instead.
	 */
	@Deprecated
	public static final String[] tokenNames;
	static {
		tokenNames = new String[_SYMBOLIC_NAMES.length];
		for (int i = 0; i < tokenNames.length; i++) {
			tokenNames[i] = VOCABULARY.getLiteralName(i);
			if (tokenNames[i] == null) {
				tokenNames[i] = VOCABULARY.getSymbolicName(i);
			}

			if (tokenNames[i] == null) {
				tokenNames[i] = "<INVALID>";
			}
		}
	}

	@Override
	@Deprecated
	public String[] getTokenNames() {
		return tokenNames;
	}

	@Override

	public Vocabulary getVocabulary() {
		return VOCABULARY;
	}

	@Override
	public String getGrammarFileName() { return "Grammar.g4"; }

	@Override
	public String[] getRuleNames() { return ruleNames; }

	@Override
	public String getSerializedATN() { return _serializedATN; }

	@Override
	public ATN getATN() { return _ATN; }

	public GrammarParser(TokenStream input) {
		super(input);
		_interp = new ParserATNSimulator(this,_ATN,_decisionToDFA,_sharedContextCache);
	}

	@SuppressWarnings("CheckReturnValue")
	public static class PContext extends ParserRuleContext {
		public PContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_p; }
	 
		public PContext() { }
		public void copyFrom(PContext ctx) {
			super.copyFrom(ctx);
		}
	}
	@SuppressWarnings("CheckReturnValue")
	public static class ProgramContext extends PContext {
		public TerminalNode EOF() { return getToken(GrammarParser.EOF, 0); }
		public List<StmtContext> stmt() {
			return getRuleContexts(StmtContext.class);
		}
		public StmtContext stmt(int i) {
			return getRuleContext(StmtContext.class,i);
		}
		public ProgramContext(PContext ctx) { copyFrom(ctx); }
	}

	public final PContext p() throws RecognitionException {
		PContext _localctx = new PContext(_ctx, getState());
		enterRule(_localctx, 0, RULE_p);
		int _la;
		try {
			_localctx = new ProgramContext(_localctx);
			enterOuterAlt(_localctx, 1);
			{
			setState(53);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while ((((_la) & ~0x3f) == 0 && ((1L << _la) & 144115188144980134L) != 0)) {
				{
				{
				setState(50);
				stmt();
				}
				}
				setState(55);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			setState(56);
			match(EOF);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class StmtContext extends ParserRuleContext {
		public StmtContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_stmt; }
	 
		public StmtContext() { }
		public void copyFrom(StmtContext ctx) {
			super.copyFrom(ctx);
		}
	}
	@SuppressWarnings("CheckReturnValue")
	public static class ShortVarDeclarationContext extends StmtContext {
		public IdListContext idList() {
			return getRuleContext(IdListContext.class,0);
		}
		public ArgsContext args() {
			return getRuleContext(ArgsContext.class,0);
		}
		public ShortVarDeclarationContext(StmtContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class InfiniteForStatementContext extends StmtContext {
		public BlockContext block() {
			return getRuleContext(BlockContext.class,0);
		}
		public InfiniteForStatementContext(StmtContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class IncrementStatementContext extends StmtContext {
		public TerminalNode ID() { return getToken(GrammarParser.ID, 0); }
		public IncrementStatementContext(StmtContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class WhileStatementContext extends StmtContext {
		public EContext e() {
			return getRuleContext(EContext.class,0);
		}
		public BlockContext block() {
			return getRuleContext(BlockContext.class,0);
		}
		public WhileStatementContext(StmtContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class ForClassicStatementContext extends StmtContext {
		public StmtContext init;
		public EContext cond;
		public StmtContext update;
		public BlockContext block() {
			return getRuleContext(BlockContext.class,0);
		}
		public List<StmtContext> stmt() {
			return getRuleContexts(StmtContext.class);
		}
		public StmtContext stmt(int i) {
			return getRuleContext(StmtContext.class,i);
		}
		public EContext e() {
			return getRuleContext(EContext.class,0);
		}
		public ForClassicStatementContext(StmtContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class ConstDeclarationContext extends StmtContext {
		public TerminalNode ID() { return getToken(GrammarParser.ID, 0); }
		public TypeContext type() {
			return getRuleContext(TypeContext.class,0);
		}
		public EContext e() {
			return getRuleContext(EContext.class,0);
		}
		public ConstDeclarationContext(StmtContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class VarDeclarationContext extends StmtContext {
		public IdListContext idList() {
			return getRuleContext(IdListContext.class,0);
		}
		public ArrayTypeContext arrayType() {
			return getRuleContext(ArrayTypeContext.class,0);
		}
		public TypeContext type() {
			return getRuleContext(TypeContext.class,0);
		}
		public ArgsContext args() {
			return getRuleContext(ArgsContext.class,0);
		}
		public VarDeclarationContext(StmtContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class BreakStatementContext extends StmtContext {
		public BreakStatementContext(StmtContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class IfStatementContext extends StmtContext {
		public EContext e() {
			return getRuleContext(EContext.class,0);
		}
		public BlockContext block() {
			return getRuleContext(BlockContext.class,0);
		}
		public ElseStmtContext elseStmt() {
			return getRuleContext(ElseStmtContext.class,0);
		}
		public IfStatementContext(StmtContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class FunctionDeclarationContext extends StmtContext {
		public TerminalNode ID() { return getToken(GrammarParser.ID, 0); }
		public BlockContext block() {
			return getRuleContext(BlockContext.class,0);
		}
		public ParamsContext params() {
			return getRuleContext(ParamsContext.class,0);
		}
		public ReturnSpecContext returnSpec() {
			return getRuleContext(ReturnSpecContext.class,0);
		}
		public FunctionDeclarationContext(StmtContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class SwitchStatementContext extends StmtContext {
		public SwitchStmtContext switchStmt() {
			return getRuleContext(SwitchStmtContext.class,0);
		}
		public SwitchStatementContext(StmtContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class AssignmentStatementContext extends StmtContext {
		public Token op;
		public TerminalNode ID() { return getToken(GrammarParser.ID, 0); }
		public EContext e() {
			return getRuleContext(EContext.class,0);
		}
		public AssignmentStatementContext(StmtContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class PrintStatementContext extends StmtContext {
		public ArgsContext args() {
			return getRuleContext(ArgsContext.class,0);
		}
		public PrintStatementContext(StmtContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class ReturnStatementContext extends StmtContext {
		public ArgsContext args() {
			return getRuleContext(ArgsContext.class,0);
		}
		public ReturnStatementContext(StmtContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class FunctionCallStatementContext extends StmtContext {
		public TerminalNode ID() { return getToken(GrammarParser.ID, 0); }
		public ArgsContext args() {
			return getRuleContext(ArgsContext.class,0);
		}
		public FunctionCallStatementContext(StmtContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class ArrayAssignmentStatementContext extends StmtContext {
		public EContext e;
		public List<EContext> index = new ArrayList<EContext>();
		public EContext assign;
		public TerminalNode ID() { return getToken(GrammarParser.ID, 0); }
		public List<EContext> e() {
			return getRuleContexts(EContext.class);
		}
		public EContext e(int i) {
			return getRuleContext(EContext.class,i);
		}
		public ArrayAssignmentStatementContext(StmtContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class ContinueStatementContext extends StmtContext {
		public ContinueStatementContext(StmtContext ctx) { copyFrom(ctx); }
	}

	public final StmtContext stmt() throws RecognitionException {
		StmtContext _localctx = new StmtContext(_ctx, getState());
		enterRule(_localctx, 2, RULE_stmt);
		int _la;
		try {
			setState(145);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,10,_ctx) ) {
			case 1:
				_localctx = new PrintStatementContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(58);
				_la = _input.LA(1);
				if ( !(_la==T__0 || _la==T__1) ) {
				_errHandler.recoverInline(this);
				}
				else {
					if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
					_errHandler.reportMatch(this);
					consume();
				}
				setState(59);
				match(T__2);
				setState(61);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if ((((_la) & ~0x3f) == 0 && ((1L << _la) & 2880685349122605064L) != 0)) {
					{
					setState(60);
					args();
					}
				}

				setState(63);
				match(T__3);
				}
				break;
			case 2:
				_localctx = new VarDeclarationContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(64);
				match(T__4);
				setState(65);
				idList();
				setState(68);
				_errHandler.sync(this);
				switch (_input.LA(1)) {
				case T__20:
					{
					setState(66);
					arrayType();
					}
					break;
				case T__29:
				case T__30:
				case T__31:
				case T__32:
				case T__33:
				case T__34:
				case T__35:
					{
					setState(67);
					type();
					}
					break;
				default:
					throw new NoViableAltException(this);
				}
				setState(72);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if (_la==T__5) {
					{
					setState(70);
					match(T__5);
					setState(71);
					args();
					}
				}

				}
				break;
			case 3:
				_localctx = new ConstDeclarationContext(_localctx);
				enterOuterAlt(_localctx, 3);
				{
				setState(74);
				match(T__6);
				setState(75);
				match(ID);
				setState(76);
				type();
				setState(77);
				match(T__5);
				setState(78);
				e();
				}
				break;
			case 4:
				_localctx = new ShortVarDeclarationContext(_localctx);
				enterOuterAlt(_localctx, 4);
				{
				setState(80);
				idList();
				setState(81);
				match(T__7);
				setState(82);
				args();
				}
				break;
			case 5:
				_localctx = new AssignmentStatementContext(_localctx);
				enterOuterAlt(_localctx, 5);
				{
				setState(84);
				match(ID);
				setState(85);
				((AssignmentStatementContext)_localctx).op = _input.LT(1);
				_la = _input.LA(1);
				if ( !((((_la) & ~0x3f) == 0 && ((1L << _la) & 7744L) != 0)) ) {
					((AssignmentStatementContext)_localctx).op = (Token)_errHandler.recoverInline(this);
				}
				else {
					if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
					_errHandler.reportMatch(this);
					consume();
				}
				setState(86);
				e();
				}
				break;
			case 6:
				_localctx = new IncrementStatementContext(_localctx);
				enterOuterAlt(_localctx, 6);
				{
				setState(87);
				match(ID);
				setState(88);
				match(T__12);
				}
				break;
			case 7:
				_localctx = new IfStatementContext(_localctx);
				enterOuterAlt(_localctx, 7);
				{
				setState(89);
				match(T__13);
				setState(90);
				e();
				setState(91);
				block();
				setState(93);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if (_la==T__24) {
					{
					setState(92);
					elseStmt();
					}
				}

				}
				break;
			case 8:
				_localctx = new ForClassicStatementContext(_localctx);
				enterOuterAlt(_localctx, 8);
				{
				setState(95);
				match(T__14);
				setState(96);
				((ForClassicStatementContext)_localctx).init = stmt();
				setState(97);
				match(T__15);
				setState(98);
				((ForClassicStatementContext)_localctx).cond = e();
				setState(99);
				match(T__15);
				setState(100);
				((ForClassicStatementContext)_localctx).update = stmt();
				setState(101);
				block();
				}
				break;
			case 9:
				_localctx = new WhileStatementContext(_localctx);
				enterOuterAlt(_localctx, 9);
				{
				setState(103);
				match(T__14);
				setState(104);
				e();
				setState(105);
				block();
				}
				break;
			case 10:
				_localctx = new InfiniteForStatementContext(_localctx);
				enterOuterAlt(_localctx, 10);
				{
				setState(107);
				match(T__14);
				setState(108);
				block();
				}
				break;
			case 11:
				_localctx = new SwitchStatementContext(_localctx);
				enterOuterAlt(_localctx, 11);
				{
				setState(109);
				switchStmt();
				}
				break;
			case 12:
				_localctx = new ContinueStatementContext(_localctx);
				enterOuterAlt(_localctx, 12);
				{
				setState(110);
				match(T__16);
				}
				break;
			case 13:
				_localctx = new BreakStatementContext(_localctx);
				enterOuterAlt(_localctx, 13);
				{
				setState(111);
				match(T__17);
				}
				break;
			case 14:
				_localctx = new ReturnStatementContext(_localctx);
				enterOuterAlt(_localctx, 14);
				{
				setState(112);
				match(T__18);
				setState(114);
				_errHandler.sync(this);
				switch ( getInterpreter().adaptivePredict(_input,5,_ctx) ) {
				case 1:
					{
					setState(113);
					args();
					}
					break;
				}
				}
				break;
			case 15:
				_localctx = new FunctionDeclarationContext(_localctx);
				enterOuterAlt(_localctx, 15);
				{
				setState(116);
				match(T__19);
				setState(117);
				match(ID);
				setState(118);
				match(T__2);
				setState(120);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if (_la==ID) {
					{
					setState(119);
					params();
					}
				}

				setState(122);
				match(T__3);
				setState(124);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if ((((_la) & ~0x3f) == 0 && ((1L << _la) & 136367308808L) != 0)) {
					{
					setState(123);
					returnSpec();
					}
				}

				setState(126);
				block();
				}
				break;
			case 16:
				_localctx = new FunctionCallStatementContext(_localctx);
				enterOuterAlt(_localctx, 16);
				{
				setState(127);
				match(ID);
				setState(128);
				match(T__2);
				setState(130);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if ((((_la) & ~0x3f) == 0 && ((1L << _la) & 2880685349122605064L) != 0)) {
					{
					setState(129);
					args();
					}
				}

				setState(132);
				match(T__3);
				}
				break;
			case 17:
				_localctx = new ArrayAssignmentStatementContext(_localctx);
				enterOuterAlt(_localctx, 17);
				{
				setState(133);
				match(ID);
				setState(138); 
				_errHandler.sync(this);
				_la = _input.LA(1);
				do {
					{
					{
					setState(134);
					match(T__20);
					setState(135);
					((ArrayAssignmentStatementContext)_localctx).e = e();
					((ArrayAssignmentStatementContext)_localctx).index.add(((ArrayAssignmentStatementContext)_localctx).e);
					setState(136);
					match(T__21);
					}
					}
					setState(140); 
					_errHandler.sync(this);
					_la = _input.LA(1);
				} while ( _la==T__20 );
				setState(142);
				match(T__5);
				setState(143);
				((ArrayAssignmentStatementContext)_localctx).assign = e();
				}
				break;
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class BlockContext extends ParserRuleContext {
		public BlockContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_block; }
	 
		public BlockContext() { }
		public void copyFrom(BlockContext ctx) {
			super.copyFrom(ctx);
		}
	}
	@SuppressWarnings("CheckReturnValue")
	public static class BlockStatementContext extends BlockContext {
		public List<StmtContext> stmt() {
			return getRuleContexts(StmtContext.class);
		}
		public StmtContext stmt(int i) {
			return getRuleContext(StmtContext.class,i);
		}
		public BlockStatementContext(BlockContext ctx) { copyFrom(ctx); }
	}

	public final BlockContext block() throws RecognitionException {
		BlockContext _localctx = new BlockContext(_ctx, getState());
		enterRule(_localctx, 4, RULE_block);
		int _la;
		try {
			_localctx = new BlockStatementContext(_localctx);
			enterOuterAlt(_localctx, 1);
			{
			setState(147);
			match(T__22);
			setState(151);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while ((((_la) & ~0x3f) == 0 && ((1L << _la) & 144115188144980134L) != 0)) {
				{
				{
				setState(148);
				stmt();
				}
				}
				setState(153);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			setState(154);
			match(T__23);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ElseStmtContext extends ParserRuleContext {
		public BlockContext block() {
			return getRuleContext(BlockContext.class,0);
		}
		public ElseStmtContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_elseStmt; }
	}

	public final ElseStmtContext elseStmt() throws RecognitionException {
		ElseStmtContext _localctx = new ElseStmtContext(_ctx, getState());
		enterRule(_localctx, 6, RULE_elseStmt);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(156);
			match(T__24);
			setState(157);
			block();
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class SwitchStmtContext extends ParserRuleContext {
		public EContext e() {
			return getRuleContext(EContext.class,0);
		}
		public List<CaseStmtContext> caseStmt() {
			return getRuleContexts(CaseStmtContext.class);
		}
		public CaseStmtContext caseStmt(int i) {
			return getRuleContext(CaseStmtContext.class,i);
		}
		public DefaultStmtContext defaultStmt() {
			return getRuleContext(DefaultStmtContext.class,0);
		}
		public SwitchStmtContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_switchStmt; }
	}

	public final SwitchStmtContext switchStmt() throws RecognitionException {
		SwitchStmtContext _localctx = new SwitchStmtContext(_ctx, getState());
		enterRule(_localctx, 8, RULE_switchStmt);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(159);
			match(T__25);
			setState(160);
			e();
			setState(161);
			match(T__22);
			setState(165);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==T__26) {
				{
				{
				setState(162);
				caseStmt();
				}
				}
				setState(167);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			setState(169);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if (_la==T__28) {
				{
				setState(168);
				defaultStmt();
				}
			}

			setState(171);
			match(T__23);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class CaseStmtContext extends ParserRuleContext {
		public EContext e() {
			return getRuleContext(EContext.class,0);
		}
		public List<StmtContext> stmt() {
			return getRuleContexts(StmtContext.class);
		}
		public StmtContext stmt(int i) {
			return getRuleContext(StmtContext.class,i);
		}
		public CaseStmtContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_caseStmt; }
	}

	public final CaseStmtContext caseStmt() throws RecognitionException {
		CaseStmtContext _localctx = new CaseStmtContext(_ctx, getState());
		enterRule(_localctx, 10, RULE_caseStmt);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(173);
			match(T__26);
			setState(174);
			e();
			setState(175);
			match(T__27);
			setState(179);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while ((((_la) & ~0x3f) == 0 && ((1L << _la) & 144115188144980134L) != 0)) {
				{
				{
				setState(176);
				stmt();
				}
				}
				setState(181);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class DefaultStmtContext extends ParserRuleContext {
		public List<StmtContext> stmt() {
			return getRuleContexts(StmtContext.class);
		}
		public StmtContext stmt(int i) {
			return getRuleContext(StmtContext.class,i);
		}
		public DefaultStmtContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_defaultStmt; }
	}

	public final DefaultStmtContext defaultStmt() throws RecognitionException {
		DefaultStmtContext _localctx = new DefaultStmtContext(_ctx, getState());
		enterRule(_localctx, 12, RULE_defaultStmt);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(182);
			match(T__28);
			setState(183);
			match(T__27);
			setState(187);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while ((((_la) & ~0x3f) == 0 && ((1L << _la) & 144115188144980134L) != 0)) {
				{
				{
				setState(184);
				stmt();
				}
				}
				setState(189);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class TypeContext extends ParserRuleContext {
		public TypeContext type() {
			return getRuleContext(TypeContext.class,0);
		}
		public TypeContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_type; }
	}

	public final TypeContext type() throws RecognitionException {
		TypeContext _localctx = new TypeContext(_ctx, getState());
		enterRule(_localctx, 14, RULE_type);
		try {
			setState(199);
			_errHandler.sync(this);
			switch (_input.LA(1)) {
			case T__29:
				enterOuterAlt(_localctx, 1);
				{
				setState(190);
				match(T__29);
				}
				break;
			case T__30:
				enterOuterAlt(_localctx, 2);
				{
				setState(191);
				match(T__30);
				}
				break;
			case T__31:
				enterOuterAlt(_localctx, 3);
				{
				setState(192);
				match(T__31);
				}
				break;
			case T__32:
				enterOuterAlt(_localctx, 4);
				{
				setState(193);
				match(T__32);
				}
				break;
			case T__33:
				enterOuterAlt(_localctx, 5);
				{
				setState(194);
				match(T__33);
				}
				break;
			case T__34:
				enterOuterAlt(_localctx, 6);
				{
				setState(195);
				match(T__34);
				setState(196);
				type();
				}
				break;
			case T__35:
				enterOuterAlt(_localctx, 7);
				{
				setState(197);
				match(T__35);
				setState(198);
				type();
				}
				break;
			default:
				throw new NoViableAltException(this);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ArrayTypeContext extends ParserRuleContext {
		public TypeContext type() {
			return getRuleContext(TypeContext.class,0);
		}
		public List<TerminalNode> INT() { return getTokens(GrammarParser.INT); }
		public TerminalNode INT(int i) {
			return getToken(GrammarParser.INT, i);
		}
		public ArrayTypeContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_arrayType; }
	}

	public final ArrayTypeContext arrayType() throws RecognitionException {
		ArrayTypeContext _localctx = new ArrayTypeContext(_ctx, getState());
		enterRule(_localctx, 16, RULE_arrayType);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(204); 
			_errHandler.sync(this);
			_la = _input.LA(1);
			do {
				{
				{
				setState(201);
				match(T__20);
				setState(202);
				match(INT);
				setState(203);
				match(T__21);
				}
				}
				setState(206); 
				_errHandler.sync(this);
				_la = _input.LA(1);
			} while ( _la==T__20 );
			setState(208);
			type();
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class EContext extends ParserRuleContext {
		public LogicContext logic() {
			return getRuleContext(LogicContext.class,0);
		}
		public EContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_e; }
	}

	public final EContext e() throws RecognitionException {
		EContext _localctx = new EContext(_ctx, getState());
		enterRule(_localctx, 18, RULE_e);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(210);
			logic(0);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class LogicContext extends ParserRuleContext {
		public LogicContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_logic; }
	 
		public LogicContext() { }
		public void copyFrom(LogicContext ctx) {
			super.copyFrom(ctx);
		}
	}
	@SuppressWarnings("CheckReturnValue")
	public static class OrExpressionContext extends LogicContext {
		public AndExprContext andExpr() {
			return getRuleContext(AndExprContext.class,0);
		}
		public LogicContext logic() {
			return getRuleContext(LogicContext.class,0);
		}
		public OrExpressionContext(LogicContext ctx) { copyFrom(ctx); }
	}

	public final LogicContext logic() throws RecognitionException {
		return logic(0);
	}

	private LogicContext logic(int _p) throws RecognitionException {
		ParserRuleContext _parentctx = _ctx;
		int _parentState = getState();
		LogicContext _localctx = new LogicContext(_ctx, _parentState);
		LogicContext _prevctx = _localctx;
		int _startState = 20;
		enterRecursionRule(_localctx, 20, RULE_logic, _p);
		try {
			int _alt;
			enterOuterAlt(_localctx, 1);
			{
			{
			_localctx = new OrExpressionContext(_localctx);
			_ctx = _localctx;
			_prevctx = _localctx;

			setState(213);
			andExpr(0);
			}
			_ctx.stop = _input.LT(-1);
			setState(220);
			_errHandler.sync(this);
			_alt = getInterpreter().adaptivePredict(_input,18,_ctx);
			while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER ) {
				if ( _alt==1 ) {
					if ( _parseListeners!=null ) triggerExitRuleEvent();
					_prevctx = _localctx;
					{
					{
					_localctx = new OrExpressionContext(new LogicContext(_parentctx, _parentState));
					pushNewRecursionContext(_localctx, _startState, RULE_logic);
					setState(215);
					if (!(precpred(_ctx, 2))) throw new FailedPredicateException(this, "precpred(_ctx, 2)");
					setState(216);
					match(T__36);
					setState(217);
					andExpr(0);
					}
					} 
				}
				setState(222);
				_errHandler.sync(this);
				_alt = getInterpreter().adaptivePredict(_input,18,_ctx);
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			unrollRecursionContexts(_parentctx);
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class AndExprContext extends ParserRuleContext {
		public AndExprContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_andExpr; }
	 
		public AndExprContext() { }
		public void copyFrom(AndExprContext ctx) {
			super.copyFrom(ctx);
		}
	}
	@SuppressWarnings("CheckReturnValue")
	public static class AndExpressionContext extends AndExprContext {
		public EqContext eq() {
			return getRuleContext(EqContext.class,0);
		}
		public AndExprContext andExpr() {
			return getRuleContext(AndExprContext.class,0);
		}
		public AndExpressionContext(AndExprContext ctx) { copyFrom(ctx); }
	}

	public final AndExprContext andExpr() throws RecognitionException {
		return andExpr(0);
	}

	private AndExprContext andExpr(int _p) throws RecognitionException {
		ParserRuleContext _parentctx = _ctx;
		int _parentState = getState();
		AndExprContext _localctx = new AndExprContext(_ctx, _parentState);
		AndExprContext _prevctx = _localctx;
		int _startState = 22;
		enterRecursionRule(_localctx, 22, RULE_andExpr, _p);
		try {
			int _alt;
			enterOuterAlt(_localctx, 1);
			{
			{
			_localctx = new AndExpressionContext(_localctx);
			_ctx = _localctx;
			_prevctx = _localctx;

			setState(224);
			eq();
			}
			_ctx.stop = _input.LT(-1);
			setState(231);
			_errHandler.sync(this);
			_alt = getInterpreter().adaptivePredict(_input,19,_ctx);
			while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER ) {
				if ( _alt==1 ) {
					if ( _parseListeners!=null ) triggerExitRuleEvent();
					_prevctx = _localctx;
					{
					{
					_localctx = new AndExpressionContext(new AndExprContext(_parentctx, _parentState));
					pushNewRecursionContext(_localctx, _startState, RULE_andExpr);
					setState(226);
					if (!(precpred(_ctx, 2))) throw new FailedPredicateException(this, "precpred(_ctx, 2)");
					setState(227);
					match(T__37);
					setState(228);
					eq();
					}
					} 
				}
				setState(233);
				_errHandler.sync(this);
				_alt = getInterpreter().adaptivePredict(_input,19,_ctx);
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			unrollRecursionContexts(_parentctx);
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class EqContext extends ParserRuleContext {
		public EqContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_eq; }
	 
		public EqContext() { }
		public void copyFrom(EqContext ctx) {
			super.copyFrom(ctx);
		}
	}
	@SuppressWarnings("CheckReturnValue")
	public static class EqualityExpressionContext extends EqContext {
		public IneqContext left;
		public IneqContext right;
		public List<IneqContext> ineq() {
			return getRuleContexts(IneqContext.class);
		}
		public IneqContext ineq(int i) {
			return getRuleContext(IneqContext.class,i);
		}
		public EqualityExpressionContext(EqContext ctx) { copyFrom(ctx); }
	}

	public final EqContext eq() throws RecognitionException {
		EqContext _localctx = new EqContext(_ctx, getState());
		enterRule(_localctx, 24, RULE_eq);
		try {
			_localctx = new EqualityExpressionContext(_localctx);
			enterOuterAlt(_localctx, 1);
			{
			setState(234);
			((EqualityExpressionContext)_localctx).left = ineq();
			setState(237);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,20,_ctx) ) {
			case 1:
				{
				setState(235);
				match(T__38);
				setState(236);
				((EqualityExpressionContext)_localctx).right = ineq();
				}
				break;
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class IneqContext extends ParserRuleContext {
		public IneqContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_ineq; }
	 
		public IneqContext() { }
		public void copyFrom(IneqContext ctx) {
			super.copyFrom(ctx);
		}
	}
	@SuppressWarnings("CheckReturnValue")
	public static class InequalityExpressionContext extends IneqContext {
		public AddContext left;
		public Token op;
		public AddContext right;
		public List<AddContext> add() {
			return getRuleContexts(AddContext.class);
		}
		public AddContext add(int i) {
			return getRuleContext(AddContext.class,i);
		}
		public InequalityExpressionContext(IneqContext ctx) { copyFrom(ctx); }
	}

	public final IneqContext ineq() throws RecognitionException {
		IneqContext _localctx = new IneqContext(_ctx, getState());
		enterRule(_localctx, 26, RULE_ineq);
		int _la;
		try {
			_localctx = new InequalityExpressionContext(_localctx);
			enterOuterAlt(_localctx, 1);
			{
			setState(239);
			((InequalityExpressionContext)_localctx).left = add(0);
			setState(242);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,21,_ctx) ) {
			case 1:
				{
				setState(240);
				((InequalityExpressionContext)_localctx).op = _input.LT(1);
				_la = _input.LA(1);
				if ( !((((_la) & ~0x3f) == 0 && ((1L << _la) & 34084860461056L) != 0)) ) {
					((InequalityExpressionContext)_localctx).op = (Token)_errHandler.recoverInline(this);
				}
				else {
					if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
					_errHandler.reportMatch(this);
					consume();
				}
				setState(241);
				((InequalityExpressionContext)_localctx).right = add(0);
				}
				break;
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class AddContext extends ParserRuleContext {
		public AddContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_add; }
	 
		public AddContext() { }
		public void copyFrom(AddContext ctx) {
			super.copyFrom(ctx);
		}
	}
	@SuppressWarnings("CheckReturnValue")
	public static class AddExpressionContext extends AddContext {
		public Token op;
		public ProdContext prod() {
			return getRuleContext(ProdContext.class,0);
		}
		public AddContext add() {
			return getRuleContext(AddContext.class,0);
		}
		public AddExpressionContext(AddContext ctx) { copyFrom(ctx); }
	}

	public final AddContext add() throws RecognitionException {
		return add(0);
	}

	private AddContext add(int _p) throws RecognitionException {
		ParserRuleContext _parentctx = _ctx;
		int _parentState = getState();
		AddContext _localctx = new AddContext(_ctx, _parentState);
		AddContext _prevctx = _localctx;
		int _startState = 28;
		enterRecursionRule(_localctx, 28, RULE_add, _p);
		int _la;
		try {
			int _alt;
			enterOuterAlt(_localctx, 1);
			{
			{
			_localctx = new AddExpressionContext(_localctx);
			_ctx = _localctx;
			_prevctx = _localctx;

			setState(245);
			prod(0);
			}
			_ctx.stop = _input.LT(-1);
			setState(252);
			_errHandler.sync(this);
			_alt = getInterpreter().adaptivePredict(_input,22,_ctx);
			while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER ) {
				if ( _alt==1 ) {
					if ( _parseListeners!=null ) triggerExitRuleEvent();
					_prevctx = _localctx;
					{
					{
					_localctx = new AddExpressionContext(new AddContext(_parentctx, _parentState));
					pushNewRecursionContext(_localctx, _startState, RULE_add);
					setState(247);
					if (!(precpred(_ctx, 2))) throw new FailedPredicateException(this, "precpred(_ctx, 2)");
					setState(248);
					((AddExpressionContext)_localctx).op = _input.LT(1);
					_la = _input.LA(1);
					if ( !(_la==T__44 || _la==T__45) ) {
						((AddExpressionContext)_localctx).op = (Token)_errHandler.recoverInline(this);
					}
					else {
						if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
						_errHandler.reportMatch(this);
						consume();
					}
					setState(249);
					prod(0);
					}
					} 
				}
				setState(254);
				_errHandler.sync(this);
				_alt = getInterpreter().adaptivePredict(_input,22,_ctx);
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			unrollRecursionContexts(_parentctx);
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ProdContext extends ParserRuleContext {
		public ProdContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_prod; }
	 
		public ProdContext() { }
		public void copyFrom(ProdContext ctx) {
			super.copyFrom(ctx);
		}
	}
	@SuppressWarnings("CheckReturnValue")
	public static class ProductExpressionContext extends ProdContext {
		public Token op;
		public UnaryContext unary() {
			return getRuleContext(UnaryContext.class,0);
		}
		public ProdContext prod() {
			return getRuleContext(ProdContext.class,0);
		}
		public ProductExpressionContext(ProdContext ctx) { copyFrom(ctx); }
	}

	public final ProdContext prod() throws RecognitionException {
		return prod(0);
	}

	private ProdContext prod(int _p) throws RecognitionException {
		ParserRuleContext _parentctx = _ctx;
		int _parentState = getState();
		ProdContext _localctx = new ProdContext(_ctx, _parentState);
		ProdContext _prevctx = _localctx;
		int _startState = 30;
		enterRecursionRule(_localctx, 30, RULE_prod, _p);
		int _la;
		try {
			int _alt;
			enterOuterAlt(_localctx, 1);
			{
			{
			_localctx = new ProductExpressionContext(_localctx);
			_ctx = _localctx;
			_prevctx = _localctx;

			setState(256);
			unary();
			}
			_ctx.stop = _input.LT(-1);
			setState(263);
			_errHandler.sync(this);
			_alt = getInterpreter().adaptivePredict(_input,23,_ctx);
			while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER ) {
				if ( _alt==1 ) {
					if ( _parseListeners!=null ) triggerExitRuleEvent();
					_prevctx = _localctx;
					{
					{
					_localctx = new ProductExpressionContext(new ProdContext(_parentctx, _parentState));
					pushNewRecursionContext(_localctx, _startState, RULE_prod);
					setState(258);
					if (!(precpred(_ctx, 2))) throw new FailedPredicateException(this, "precpred(_ctx, 2)");
					setState(259);
					((ProductExpressionContext)_localctx).op = _input.LT(1);
					_la = _input.LA(1);
					if ( !((((_la) & ~0x3f) == 0 && ((1L << _la) & 422246824804352L) != 0)) ) {
						((ProductExpressionContext)_localctx).op = (Token)_errHandler.recoverInline(this);
					}
					else {
						if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
						_errHandler.reportMatch(this);
						consume();
					}
					setState(260);
					unary();
					}
					} 
				}
				setState(265);
				_errHandler.sync(this);
				_alt = getInterpreter().adaptivePredict(_input,23,_ctx);
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			unrollRecursionContexts(_parentctx);
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class UnaryContext extends ParserRuleContext {
		public UnaryContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_unary; }
	 
		public UnaryContext() { }
		public void copyFrom(UnaryContext ctx) {
			super.copyFrom(ctx);
		}
	}
	@SuppressWarnings("CheckReturnValue")
	public static class PrimaryExpressionContext extends UnaryContext {
		public PrimaryContext primary() {
			return getRuleContext(PrimaryContext.class,0);
		}
		public PrimaryExpressionContext(UnaryContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class UnaryExpressionContext extends UnaryContext {
		public UnaryContext unary() {
			return getRuleContext(UnaryContext.class,0);
		}
		public UnaryExpressionContext(UnaryContext ctx) { copyFrom(ctx); }
	}

	public final UnaryContext unary() throws RecognitionException {
		UnaryContext _localctx = new UnaryContext(_ctx, getState());
		enterRule(_localctx, 32, RULE_unary);
		try {
			setState(271);
			_errHandler.sync(this);
			switch (_input.LA(1)) {
			case T__2:
			case T__20:
			case T__35:
			case T__50:
			case T__51:
			case T__52:
			case T__53:
			case FLOAT:
			case INT:
			case ID:
			case STRING:
			case RUNE:
				_localctx = new PrimaryExpressionContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(266);
				primary();
				}
				break;
			case T__45:
				_localctx = new UnaryExpressionContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(267);
				match(T__45);
				setState(268);
				unary();
				}
				break;
			case T__48:
				_localctx = new UnaryExpressionContext(_localctx);
				enterOuterAlt(_localctx, 3);
				{
				setState(269);
				match(T__48);
				setState(270);
				unary();
				}
				break;
			default:
				throw new NoViableAltException(this);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ArrayRowContext extends ParserRuleContext {
		public List<EContext> e() {
			return getRuleContexts(EContext.class);
		}
		public EContext e(int i) {
			return getRuleContext(EContext.class,i);
		}
		public ArrayRowContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_arrayRow; }
	}

	public final ArrayRowContext arrayRow() throws RecognitionException {
		ArrayRowContext _localctx = new ArrayRowContext(_ctx, getState());
		enterRule(_localctx, 34, RULE_arrayRow);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(273);
			match(T__22);
			setState(274);
			e();
			setState(279);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==T__49) {
				{
				{
				setState(275);
				match(T__49);
				setState(276);
				e();
				}
				}
				setState(281);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			setState(282);
			match(T__23);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class PrimaryContext extends ParserRuleContext {
		public PrimaryContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_primary; }
	 
		public PrimaryContext() { }
		public void copyFrom(PrimaryContext ctx) {
			super.copyFrom(ctx);
		}
	}
	@SuppressWarnings("CheckReturnValue")
	public static class IntExpressionContext extends PrimaryContext {
		public TerminalNode INT() { return getToken(GrammarParser.INT, 0); }
		public IntExpressionContext(PrimaryContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class MatrixInitExpressionContext extends PrimaryContext {
		public ArrayTypeContext arrayType() {
			return getRuleContext(ArrayTypeContext.class,0);
		}
		public List<ArrayRowContext> arrayRow() {
			return getRuleContexts(ArrayRowContext.class);
		}
		public ArrayRowContext arrayRow(int i) {
			return getRuleContext(ArrayRowContext.class,i);
		}
		public MatrixInitExpressionContext(PrimaryContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class FloatExpressionContext extends PrimaryContext {
		public TerminalNode FLOAT() { return getToken(GrammarParser.FLOAT, 0); }
		public FloatExpressionContext(PrimaryContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class GroupedExpressionContext extends PrimaryContext {
		public EContext e() {
			return getRuleContext(EContext.class,0);
		}
		public GroupedExpressionContext(PrimaryContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class FunctionCallExpressionContext extends PrimaryContext {
		public TerminalNode ID() { return getToken(GrammarParser.ID, 0); }
		public ArgsContext args() {
			return getRuleContext(ArgsContext.class,0);
		}
		public FunctionCallExpressionContext(PrimaryContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class ArrayInitExpressionContext extends PrimaryContext {
		public ArrayTypeContext arrayType() {
			return getRuleContext(ArrayTypeContext.class,0);
		}
		public List<EContext> e() {
			return getRuleContexts(EContext.class);
		}
		public EContext e(int i) {
			return getRuleContext(EContext.class,i);
		}
		public ArrayInitExpressionContext(PrimaryContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class BoolExpressionContext extends PrimaryContext {
		public Token bool;
		public BoolExpressionContext(PrimaryContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class StringExpressionContext extends PrimaryContext {
		public TerminalNode STRING() { return getToken(GrammarParser.STRING, 0); }
		public StringExpressionContext(PrimaryContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class ReferenceArrayExpressionContext extends PrimaryContext {
		public TerminalNode ID() { return getToken(GrammarParser.ID, 0); }
		public List<EContext> e() {
			return getRuleContexts(EContext.class);
		}
		public EContext e(int i) {
			return getRuleContext(EContext.class,i);
		}
		public ReferenceArrayExpressionContext(PrimaryContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class NilExpressionContext extends PrimaryContext {
		public NilExpressionContext(PrimaryContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class ReferenceExpressionContext extends PrimaryContext {
		public TerminalNode ID() { return getToken(GrammarParser.ID, 0); }
		public ReferenceExpressionContext(PrimaryContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class ArrayExpressionContext extends PrimaryContext {
		public List<EContext> e() {
			return getRuleContexts(EContext.class);
		}
		public EContext e(int i) {
			return getRuleContext(EContext.class,i);
		}
		public ArrayExpressionContext(PrimaryContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class ReferenceValueExpressionContext extends PrimaryContext {
		public TerminalNode ID() { return getToken(GrammarParser.ID, 0); }
		public ReferenceValueExpressionContext(PrimaryContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class RuneExpressionContext extends PrimaryContext {
		public TerminalNode RUNE() { return getToken(GrammarParser.RUNE, 0); }
		public RuneExpressionContext(PrimaryContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class ArrayAccessExpressionContext extends PrimaryContext {
		public TerminalNode ID() { return getToken(GrammarParser.ID, 0); }
		public List<EContext> e() {
			return getRuleContexts(EContext.class);
		}
		public EContext e(int i) {
			return getRuleContext(EContext.class,i);
		}
		public ArrayAccessExpressionContext(PrimaryContext ctx) { copyFrom(ctx); }
	}
	@SuppressWarnings("CheckReturnValue")
	public static class SliceInitExpressionContext extends PrimaryContext {
		public TypeContext type() {
			return getRuleContext(TypeContext.class,0);
		}
		public List<EContext> e() {
			return getRuleContexts(EContext.class);
		}
		public EContext e(int i) {
			return getRuleContext(EContext.class,i);
		}
		public SliceInitExpressionContext(PrimaryContext ctx) { copyFrom(ctx); }
	}

	public final PrimaryContext primary() throws RecognitionException {
		PrimaryContext _localctx = new PrimaryContext(_ctx, getState());
		enterRule(_localctx, 36, RULE_primary);
		int _la;
		try {
			int _alt;
			setState(373);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,34,_ctx) ) {
			case 1:
				_localctx = new GroupedExpressionContext(_localctx);
				enterOuterAlt(_localctx, 1);
				{
				setState(284);
				match(T__2);
				setState(285);
				e();
				setState(286);
				match(T__3);
				}
				break;
			case 2:
				_localctx = new FloatExpressionContext(_localctx);
				enterOuterAlt(_localctx, 2);
				{
				setState(288);
				match(FLOAT);
				}
				break;
			case 3:
				_localctx = new IntExpressionContext(_localctx);
				enterOuterAlt(_localctx, 3);
				{
				setState(289);
				match(INT);
				}
				break;
			case 4:
				_localctx = new RuneExpressionContext(_localctx);
				enterOuterAlt(_localctx, 4);
				{
				setState(290);
				match(RUNE);
				}
				break;
			case 5:
				_localctx = new StringExpressionContext(_localctx);
				enterOuterAlt(_localctx, 5);
				{
				setState(291);
				match(STRING);
				}
				break;
			case 6:
				_localctx = new ReferenceExpressionContext(_localctx);
				enterOuterAlt(_localctx, 6);
				{
				setState(292);
				match(ID);
				}
				break;
			case 7:
				_localctx = new BoolExpressionContext(_localctx);
				enterOuterAlt(_localctx, 7);
				{
				setState(293);
				((BoolExpressionContext)_localctx).bool = _input.LT(1);
				_la = _input.LA(1);
				if ( !(_la==T__50 || _la==T__51) ) {
					((BoolExpressionContext)_localctx).bool = (Token)_errHandler.recoverInline(this);
				}
				else {
					if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
					_errHandler.reportMatch(this);
					consume();
				}
				}
				break;
			case 8:
				_localctx = new NilExpressionContext(_localctx);
				enterOuterAlt(_localctx, 8);
				{
				setState(294);
				match(T__52);
				}
				break;
			case 9:
				_localctx = new FunctionCallExpressionContext(_localctx);
				enterOuterAlt(_localctx, 9);
				{
				setState(295);
				match(ID);
				setState(296);
				match(T__2);
				setState(298);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if ((((_la) & ~0x3f) == 0 && ((1L << _la) & 2880685349122605064L) != 0)) {
					{
					setState(297);
					args();
					}
				}

				setState(300);
				match(T__3);
				}
				break;
			case 10:
				_localctx = new ArrayExpressionContext(_localctx);
				enterOuterAlt(_localctx, 10);
				{
				setState(301);
				match(T__20);
				setState(302);
				e();
				setState(307);
				_errHandler.sync(this);
				_la = _input.LA(1);
				while (_la==T__49) {
					{
					{
					setState(303);
					match(T__49);
					setState(304);
					e();
					}
					}
					setState(309);
					_errHandler.sync(this);
					_la = _input.LA(1);
				}
				setState(310);
				match(T__21);
				}
				break;
			case 11:
				_localctx = new ReferenceValueExpressionContext(_localctx);
				enterOuterAlt(_localctx, 11);
				{
				setState(312);
				match(T__53);
				setState(313);
				match(ID);
				}
				break;
			case 12:
				_localctx = new ReferenceArrayExpressionContext(_localctx);
				enterOuterAlt(_localctx, 12);
				{
				setState(314);
				match(T__53);
				setState(315);
				match(ID);
				setState(320); 
				_errHandler.sync(this);
				_alt = 1;
				do {
					switch (_alt) {
					case 1:
						{
						{
						setState(316);
						match(T__20);
						setState(317);
						e();
						setState(318);
						match(T__21);
						}
						}
						break;
					default:
						throw new NoViableAltException(this);
					}
					setState(322); 
					_errHandler.sync(this);
					_alt = getInterpreter().adaptivePredict(_input,28,_ctx);
				} while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER );
				}
				break;
			case 13:
				_localctx = new ArrayAccessExpressionContext(_localctx);
				enterOuterAlt(_localctx, 13);
				{
				setState(324);
				match(ID);
				setState(329); 
				_errHandler.sync(this);
				_alt = 1;
				do {
					switch (_alt) {
					case 1:
						{
						{
						setState(325);
						match(T__20);
						setState(326);
						e();
						setState(327);
						match(T__21);
						}
						}
						break;
					default:
						throw new NoViableAltException(this);
					}
					setState(331); 
					_errHandler.sync(this);
					_alt = getInterpreter().adaptivePredict(_input,29,_ctx);
				} while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER );
				}
				break;
			case 14:
				_localctx = new SliceInitExpressionContext(_localctx);
				enterOuterAlt(_localctx, 14);
				{
				setState(333);
				match(T__35);
				setState(334);
				type();
				setState(335);
				match(T__22);
				setState(336);
				e();
				setState(341);
				_errHandler.sync(this);
				_la = _input.LA(1);
				while (_la==T__49) {
					{
					{
					setState(337);
					match(T__49);
					setState(338);
					e();
					}
					}
					setState(343);
					_errHandler.sync(this);
					_la = _input.LA(1);
				}
				setState(344);
				match(T__23);
				}
				break;
			case 15:
				_localctx = new ArrayInitExpressionContext(_localctx);
				enterOuterAlt(_localctx, 15);
				{
				setState(346);
				arrayType();
				setState(347);
				match(T__22);
				setState(348);
				e();
				setState(353);
				_errHandler.sync(this);
				_la = _input.LA(1);
				while (_la==T__49) {
					{
					{
					setState(349);
					match(T__49);
					setState(350);
					e();
					}
					}
					setState(355);
					_errHandler.sync(this);
					_la = _input.LA(1);
				}
				setState(356);
				match(T__23);
				}
				break;
			case 16:
				_localctx = new MatrixInitExpressionContext(_localctx);
				enterOuterAlt(_localctx, 16);
				{
				setState(358);
				arrayType();
				setState(359);
				match(T__22);
				setState(360);
				arrayRow();
				setState(365);
				_errHandler.sync(this);
				_alt = getInterpreter().adaptivePredict(_input,32,_ctx);
				while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER ) {
					if ( _alt==1 ) {
						{
						{
						setState(361);
						match(T__49);
						setState(362);
						arrayRow();
						}
						} 
					}
					setState(367);
					_errHandler.sync(this);
					_alt = getInterpreter().adaptivePredict(_input,32,_ctx);
				}
				setState(369);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if (_la==T__49) {
					{
					setState(368);
					match(T__49);
					}
				}

				setState(371);
				match(T__23);
				}
				break;
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ParamsContext extends ParserRuleContext {
		public ParamsContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_params; }
	 
		public ParamsContext() { }
		public void copyFrom(ParamsContext ctx) {
			super.copyFrom(ctx);
		}
	}
	@SuppressWarnings("CheckReturnValue")
	public static class ParameterListContext extends ParamsContext {
		public List<ParamContext> param() {
			return getRuleContexts(ParamContext.class);
		}
		public ParamContext param(int i) {
			return getRuleContext(ParamContext.class,i);
		}
		public ParameterListContext(ParamsContext ctx) { copyFrom(ctx); }
	}

	public final ParamsContext params() throws RecognitionException {
		ParamsContext _localctx = new ParamsContext(_ctx, getState());
		enterRule(_localctx, 38, RULE_params);
		int _la;
		try {
			_localctx = new ParameterListContext(_localctx);
			enterOuterAlt(_localctx, 1);
			{
			setState(375);
			param();
			setState(380);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==T__49) {
				{
				{
				setState(376);
				match(T__49);
				setState(377);
				param();
				}
				}
				setState(382);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ParamContext extends ParserRuleContext {
		public ParamContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_param; }
	 
		public ParamContext() { }
		public void copyFrom(ParamContext ctx) {
			super.copyFrom(ctx);
		}
	}
	@SuppressWarnings("CheckReturnValue")
	public static class ParamDeclContext extends ParamContext {
		public TerminalNode ID() { return getToken(GrammarParser.ID, 0); }
		public ArrayTypeContext arrayType() {
			return getRuleContext(ArrayTypeContext.class,0);
		}
		public TypeContext type() {
			return getRuleContext(TypeContext.class,0);
		}
		public ParamDeclContext(ParamContext ctx) { copyFrom(ctx); }
	}

	public final ParamContext param() throws RecognitionException {
		ParamContext _localctx = new ParamContext(_ctx, getState());
		enterRule(_localctx, 40, RULE_param);
		try {
			_localctx = new ParamDeclContext(_localctx);
			enterOuterAlt(_localctx, 1);
			{
			setState(383);
			match(ID);
			setState(386);
			_errHandler.sync(this);
			switch (_input.LA(1)) {
			case T__20:
				{
				setState(384);
				arrayType();
				}
				break;
			case T__29:
			case T__30:
			case T__31:
			case T__32:
			case T__33:
			case T__34:
			case T__35:
				{
				setState(385);
				type();
				}
				break;
			default:
				throw new NoViableAltException(this);
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ReturnSpecContext extends ParserRuleContext {
		public TypeContext type() {
			return getRuleContext(TypeContext.class,0);
		}
		public ArrayTypeContext arrayType() {
			return getRuleContext(ArrayTypeContext.class,0);
		}
		public List<ReturnTypeContext> returnType() {
			return getRuleContexts(ReturnTypeContext.class);
		}
		public ReturnTypeContext returnType(int i) {
			return getRuleContext(ReturnTypeContext.class,i);
		}
		public ReturnSpecContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_returnSpec; }
	}

	public final ReturnSpecContext returnSpec() throws RecognitionException {
		ReturnSpecContext _localctx = new ReturnSpecContext(_ctx, getState());
		enterRule(_localctx, 42, RULE_returnSpec);
		int _la;
		try {
			setState(401);
			_errHandler.sync(this);
			switch (_input.LA(1)) {
			case T__29:
			case T__30:
			case T__31:
			case T__32:
			case T__33:
			case T__34:
			case T__35:
				enterOuterAlt(_localctx, 1);
				{
				setState(388);
				type();
				}
				break;
			case T__20:
				enterOuterAlt(_localctx, 2);
				{
				setState(389);
				arrayType();
				}
				break;
			case T__2:
				enterOuterAlt(_localctx, 3);
				{
				setState(390);
				match(T__2);
				setState(391);
				returnType();
				setState(396);
				_errHandler.sync(this);
				_la = _input.LA(1);
				while (_la==T__49) {
					{
					{
					setState(392);
					match(T__49);
					setState(393);
					returnType();
					}
					}
					setState(398);
					_errHandler.sync(this);
					_la = _input.LA(1);
				}
				setState(399);
				match(T__3);
				}
				break;
			default:
				throw new NoViableAltException(this);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ReturnTypeContext extends ParserRuleContext {
		public TypeContext type() {
			return getRuleContext(TypeContext.class,0);
		}
		public ArrayTypeContext arrayType() {
			return getRuleContext(ArrayTypeContext.class,0);
		}
		public ReturnTypeContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_returnType; }
	}

	public final ReturnTypeContext returnType() throws RecognitionException {
		ReturnTypeContext _localctx = new ReturnTypeContext(_ctx, getState());
		enterRule(_localctx, 44, RULE_returnType);
		try {
			setState(405);
			_errHandler.sync(this);
			switch (_input.LA(1)) {
			case T__29:
			case T__30:
			case T__31:
			case T__32:
			case T__33:
			case T__34:
			case T__35:
				enterOuterAlt(_localctx, 1);
				{
				setState(403);
				type();
				}
				break;
			case T__20:
				enterOuterAlt(_localctx, 2);
				{
				setState(404);
				arrayType();
				}
				break;
			default:
				throw new NoViableAltException(this);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ArgsContext extends ParserRuleContext {
		public ArgsContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_args; }
	 
		public ArgsContext() { }
		public void copyFrom(ArgsContext ctx) {
			super.copyFrom(ctx);
		}
	}
	@SuppressWarnings("CheckReturnValue")
	public static class ArgumentListContext extends ArgsContext {
		public List<EContext> e() {
			return getRuleContexts(EContext.class);
		}
		public EContext e(int i) {
			return getRuleContext(EContext.class,i);
		}
		public ArgumentListContext(ArgsContext ctx) { copyFrom(ctx); }
	}

	public final ArgsContext args() throws RecognitionException {
		ArgsContext _localctx = new ArgsContext(_ctx, getState());
		enterRule(_localctx, 46, RULE_args);
		int _la;
		try {
			_localctx = new ArgumentListContext(_localctx);
			enterOuterAlt(_localctx, 1);
			{
			setState(407);
			e();
			setState(412);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==T__49) {
				{
				{
				setState(408);
				match(T__49);
				setState(409);
				e();
				}
				}
				setState(414);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class IdListContext extends ParserRuleContext {
		public List<TerminalNode> ID() { return getTokens(GrammarParser.ID); }
		public TerminalNode ID(int i) {
			return getToken(GrammarParser.ID, i);
		}
		public IdListContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_idList; }
	}

	public final IdListContext idList() throws RecognitionException {
		IdListContext _localctx = new IdListContext(_ctx, getState());
		enterRule(_localctx, 48, RULE_idList);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(415);
			match(ID);
			setState(420);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==T__49) {
				{
				{
				setState(416);
				match(T__49);
				setState(417);
				match(ID);
				}
				}
				setState(422);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	public boolean sempred(RuleContext _localctx, int ruleIndex, int predIndex) {
		switch (ruleIndex) {
		case 10:
			return logic_sempred((LogicContext)_localctx, predIndex);
		case 11:
			return andExpr_sempred((AndExprContext)_localctx, predIndex);
		case 14:
			return add_sempred((AddContext)_localctx, predIndex);
		case 15:
			return prod_sempred((ProdContext)_localctx, predIndex);
		}
		return true;
	}
	private boolean logic_sempred(LogicContext _localctx, int predIndex) {
		switch (predIndex) {
		case 0:
			return precpred(_ctx, 2);
		}
		return true;
	}
	private boolean andExpr_sempred(AndExprContext _localctx, int predIndex) {
		switch (predIndex) {
		case 1:
			return precpred(_ctx, 2);
		}
		return true;
	}
	private boolean add_sempred(AddContext _localctx, int predIndex) {
		switch (predIndex) {
		case 2:
			return precpred(_ctx, 2);
		}
		return true;
	}
	private boolean prod_sempred(ProdContext _localctx, int predIndex) {
		switch (predIndex) {
		case 3:
			return precpred(_ctx, 2);
		}
		return true;
	}

	public static final String _serializedATN =
		"\u0004\u0001>\u01a8\u0002\u0000\u0007\u0000\u0002\u0001\u0007\u0001\u0002"+
		"\u0002\u0007\u0002\u0002\u0003\u0007\u0003\u0002\u0004\u0007\u0004\u0002"+
		"\u0005\u0007\u0005\u0002\u0006\u0007\u0006\u0002\u0007\u0007\u0007\u0002"+
		"\b\u0007\b\u0002\t\u0007\t\u0002\n\u0007\n\u0002\u000b\u0007\u000b\u0002"+
		"\f\u0007\f\u0002\r\u0007\r\u0002\u000e\u0007\u000e\u0002\u000f\u0007\u000f"+
		"\u0002\u0010\u0007\u0010\u0002\u0011\u0007\u0011\u0002\u0012\u0007\u0012"+
		"\u0002\u0013\u0007\u0013\u0002\u0014\u0007\u0014\u0002\u0015\u0007\u0015"+
		"\u0002\u0016\u0007\u0016\u0002\u0017\u0007\u0017\u0002\u0018\u0007\u0018"+
		"\u0001\u0000\u0005\u00004\b\u0000\n\u0000\f\u00007\t\u0000\u0001\u0000"+
		"\u0001\u0000\u0001\u0001\u0001\u0001\u0001\u0001\u0003\u0001>\b\u0001"+
		"\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0003\u0001"+
		"E\b\u0001\u0001\u0001\u0001\u0001\u0003\u0001I\b\u0001\u0001\u0001\u0001"+
		"\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001"+
		"\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001"+
		"\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0003"+
		"\u0001^\b\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001"+
		"\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001"+
		"\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001"+
		"\u0001\u0001\u0001\u0001\u0001\u0003\u0001s\b\u0001\u0001\u0001\u0001"+
		"\u0001\u0001\u0001\u0001\u0001\u0003\u0001y\b\u0001\u0001\u0001\u0001"+
		"\u0001\u0003\u0001}\b\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001"+
		"\u0001\u0003\u0001\u0083\b\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001"+
		"\u0001\u0001\u0001\u0001\u0001\u0004\u0001\u008b\b\u0001\u000b\u0001\f"+
		"\u0001\u008c\u0001\u0001\u0001\u0001\u0001\u0001\u0003\u0001\u0092\b\u0001"+
		"\u0001\u0002\u0001\u0002\u0005\u0002\u0096\b\u0002\n\u0002\f\u0002\u0099"+
		"\t\u0002\u0001\u0002\u0001\u0002\u0001\u0003\u0001\u0003\u0001\u0003\u0001"+
		"\u0004\u0001\u0004\u0001\u0004\u0001\u0004\u0005\u0004\u00a4\b\u0004\n"+
		"\u0004\f\u0004\u00a7\t\u0004\u0001\u0004\u0003\u0004\u00aa\b\u0004\u0001"+
		"\u0004\u0001\u0004\u0001\u0005\u0001\u0005\u0001\u0005\u0001\u0005\u0005"+
		"\u0005\u00b2\b\u0005\n\u0005\f\u0005\u00b5\t\u0005\u0001\u0006\u0001\u0006"+
		"\u0001\u0006\u0005\u0006\u00ba\b\u0006\n\u0006\f\u0006\u00bd\t\u0006\u0001"+
		"\u0007\u0001\u0007\u0001\u0007\u0001\u0007\u0001\u0007\u0001\u0007\u0001"+
		"\u0007\u0001\u0007\u0001\u0007\u0003\u0007\u00c8\b\u0007\u0001\b\u0001"+
		"\b\u0001\b\u0004\b\u00cd\b\b\u000b\b\f\b\u00ce\u0001\b\u0001\b\u0001\t"+
		"\u0001\t\u0001\n\u0001\n\u0001\n\u0001\n\u0001\n\u0001\n\u0005\n\u00db"+
		"\b\n\n\n\f\n\u00de\t\n\u0001\u000b\u0001\u000b\u0001\u000b\u0001\u000b"+
		"\u0001\u000b\u0001\u000b\u0005\u000b\u00e6\b\u000b\n\u000b\f\u000b\u00e9"+
		"\t\u000b\u0001\f\u0001\f\u0001\f\u0003\f\u00ee\b\f\u0001\r\u0001\r\u0001"+
		"\r\u0003\r\u00f3\b\r\u0001\u000e\u0001\u000e\u0001\u000e\u0001\u000e\u0001"+
		"\u000e\u0001\u000e\u0005\u000e\u00fb\b\u000e\n\u000e\f\u000e\u00fe\t\u000e"+
		"\u0001\u000f\u0001\u000f\u0001\u000f\u0001\u000f\u0001\u000f\u0001\u000f"+
		"\u0005\u000f\u0106\b\u000f\n\u000f\f\u000f\u0109\t\u000f\u0001\u0010\u0001"+
		"\u0010\u0001\u0010\u0001\u0010\u0001\u0010\u0003\u0010\u0110\b\u0010\u0001"+
		"\u0011\u0001\u0011\u0001\u0011\u0001\u0011\u0005\u0011\u0116\b\u0011\n"+
		"\u0011\f\u0011\u0119\t\u0011\u0001\u0011\u0001\u0011\u0001\u0012\u0001"+
		"\u0012\u0001\u0012\u0001\u0012\u0001\u0012\u0001\u0012\u0001\u0012\u0001"+
		"\u0012\u0001\u0012\u0001\u0012\u0001\u0012\u0001\u0012\u0001\u0012\u0001"+
		"\u0012\u0003\u0012\u012b\b\u0012\u0001\u0012\u0001\u0012\u0001\u0012\u0001"+
		"\u0012\u0001\u0012\u0005\u0012\u0132\b\u0012\n\u0012\f\u0012\u0135\t\u0012"+
		"\u0001\u0012\u0001\u0012\u0001\u0012\u0001\u0012\u0001\u0012\u0001\u0012"+
		"\u0001\u0012\u0001\u0012\u0001\u0012\u0001\u0012\u0004\u0012\u0141\b\u0012"+
		"\u000b\u0012\f\u0012\u0142\u0001\u0012\u0001\u0012\u0001\u0012\u0001\u0012"+
		"\u0001\u0012\u0004\u0012\u014a\b\u0012\u000b\u0012\f\u0012\u014b\u0001"+
		"\u0012\u0001\u0012\u0001\u0012\u0001\u0012\u0001\u0012\u0001\u0012\u0005"+
		"\u0012\u0154\b\u0012\n\u0012\f\u0012\u0157\t\u0012\u0001\u0012\u0001\u0012"+
		"\u0001\u0012\u0001\u0012\u0001\u0012\u0001\u0012\u0001\u0012\u0005\u0012"+
		"\u0160\b\u0012\n\u0012\f\u0012\u0163\t\u0012\u0001\u0012\u0001\u0012\u0001"+
		"\u0012\u0001\u0012\u0001\u0012\u0001\u0012\u0001\u0012\u0005\u0012\u016c"+
		"\b\u0012\n\u0012\f\u0012\u016f\t\u0012\u0001\u0012\u0003\u0012\u0172\b"+
		"\u0012\u0001\u0012\u0001\u0012\u0003\u0012\u0176\b\u0012\u0001\u0013\u0001"+
		"\u0013\u0001\u0013\u0005\u0013\u017b\b\u0013\n\u0013\f\u0013\u017e\t\u0013"+
		"\u0001\u0014\u0001\u0014\u0001\u0014\u0003\u0014\u0183\b\u0014\u0001\u0015"+
		"\u0001\u0015\u0001\u0015\u0001\u0015\u0001\u0015\u0001\u0015\u0005\u0015"+
		"\u018b\b\u0015\n\u0015\f\u0015\u018e\t\u0015\u0001\u0015\u0001\u0015\u0003"+
		"\u0015\u0192\b\u0015\u0001\u0016\u0001\u0016\u0003\u0016\u0196\b\u0016"+
		"\u0001\u0017\u0001\u0017\u0001\u0017\u0005\u0017\u019b\b\u0017\n\u0017"+
		"\f\u0017\u019e\t\u0017\u0001\u0018\u0001\u0018\u0001\u0018\u0005\u0018"+
		"\u01a3\b\u0018\n\u0018\f\u0018\u01a6\t\u0018\u0001\u0018\u0000\u0004\u0014"+
		"\u0016\u001c\u001e\u0019\u0000\u0002\u0004\u0006\b\n\f\u000e\u0010\u0012"+
		"\u0014\u0016\u0018\u001a\u001c\u001e \"$&(*,.0\u0000\u0006\u0001\u0000"+
		"\u0001\u0002\u0002\u0000\u0006\u0006\t\f\u0001\u0000(,\u0001\u0000-.\u0002"+
		"\u0000##/0\u0001\u000034\u01dc\u00005\u0001\u0000\u0000\u0000\u0002\u0091"+
		"\u0001\u0000\u0000\u0000\u0004\u0093\u0001\u0000\u0000\u0000\u0006\u009c"+
		"\u0001\u0000\u0000\u0000\b\u009f\u0001\u0000\u0000\u0000\n\u00ad\u0001"+
		"\u0000\u0000\u0000\f\u00b6\u0001\u0000\u0000\u0000\u000e\u00c7\u0001\u0000"+
		"\u0000\u0000\u0010\u00cc\u0001\u0000\u0000\u0000\u0012\u00d2\u0001\u0000"+
		"\u0000\u0000\u0014\u00d4\u0001\u0000\u0000\u0000\u0016\u00df\u0001\u0000"+
		"\u0000\u0000\u0018\u00ea\u0001\u0000\u0000\u0000\u001a\u00ef\u0001\u0000"+
		"\u0000\u0000\u001c\u00f4\u0001\u0000\u0000\u0000\u001e\u00ff\u0001\u0000"+
		"\u0000\u0000 \u010f\u0001\u0000\u0000\u0000\"\u0111\u0001\u0000\u0000"+
		"\u0000$\u0175\u0001\u0000\u0000\u0000&\u0177\u0001\u0000\u0000\u0000("+
		"\u017f\u0001\u0000\u0000\u0000*\u0191\u0001\u0000\u0000\u0000,\u0195\u0001"+
		"\u0000\u0000\u0000.\u0197\u0001\u0000\u0000\u00000\u019f\u0001\u0000\u0000"+
		"\u000024\u0003\u0002\u0001\u000032\u0001\u0000\u0000\u000047\u0001\u0000"+
		"\u0000\u000053\u0001\u0000\u0000\u000056\u0001\u0000\u0000\u000068\u0001"+
		"\u0000\u0000\u000075\u0001\u0000\u0000\u000089\u0005\u0000\u0000\u0001"+
		"9\u0001\u0001\u0000\u0000\u0000:;\u0007\u0000\u0000\u0000;=\u0005\u0003"+
		"\u0000\u0000<>\u0003.\u0017\u0000=<\u0001\u0000\u0000\u0000=>\u0001\u0000"+
		"\u0000\u0000>?\u0001\u0000\u0000\u0000?\u0092\u0005\u0004\u0000\u0000"+
		"@A\u0005\u0005\u0000\u0000AD\u00030\u0018\u0000BE\u0003\u0010\b\u0000"+
		"CE\u0003\u000e\u0007\u0000DB\u0001\u0000\u0000\u0000DC\u0001\u0000\u0000"+
		"\u0000EH\u0001\u0000\u0000\u0000FG\u0005\u0006\u0000\u0000GI\u0003.\u0017"+
		"\u0000HF\u0001\u0000\u0000\u0000HI\u0001\u0000\u0000\u0000I\u0092\u0001"+
		"\u0000\u0000\u0000JK\u0005\u0007\u0000\u0000KL\u00059\u0000\u0000LM\u0003"+
		"\u000e\u0007\u0000MN\u0005\u0006\u0000\u0000NO\u0003\u0012\t\u0000O\u0092"+
		"\u0001\u0000\u0000\u0000PQ\u00030\u0018\u0000QR\u0005\b\u0000\u0000RS"+
		"\u0003.\u0017\u0000S\u0092\u0001\u0000\u0000\u0000TU\u00059\u0000\u0000"+
		"UV\u0007\u0001\u0000\u0000V\u0092\u0003\u0012\t\u0000WX\u00059\u0000\u0000"+
		"X\u0092\u0005\r\u0000\u0000YZ\u0005\u000e\u0000\u0000Z[\u0003\u0012\t"+
		"\u0000[]\u0003\u0004\u0002\u0000\\^\u0003\u0006\u0003\u0000]\\\u0001\u0000"+
		"\u0000\u0000]^\u0001\u0000\u0000\u0000^\u0092\u0001\u0000\u0000\u0000"+
		"_`\u0005\u000f\u0000\u0000`a\u0003\u0002\u0001\u0000ab\u0005\u0010\u0000"+
		"\u0000bc\u0003\u0012\t\u0000cd\u0005\u0010\u0000\u0000de\u0003\u0002\u0001"+
		"\u0000ef\u0003\u0004\u0002\u0000f\u0092\u0001\u0000\u0000\u0000gh\u0005"+
		"\u000f\u0000\u0000hi\u0003\u0012\t\u0000ij\u0003\u0004\u0002\u0000j\u0092"+
		"\u0001\u0000\u0000\u0000kl\u0005\u000f\u0000\u0000l\u0092\u0003\u0004"+
		"\u0002\u0000m\u0092\u0003\b\u0004\u0000n\u0092\u0005\u0011\u0000\u0000"+
		"o\u0092\u0005\u0012\u0000\u0000pr\u0005\u0013\u0000\u0000qs\u0003.\u0017"+
		"\u0000rq\u0001\u0000\u0000\u0000rs\u0001\u0000\u0000\u0000s\u0092\u0001"+
		"\u0000\u0000\u0000tu\u0005\u0014\u0000\u0000uv\u00059\u0000\u0000vx\u0005"+
		"\u0003\u0000\u0000wy\u0003&\u0013\u0000xw\u0001\u0000\u0000\u0000xy\u0001"+
		"\u0000\u0000\u0000yz\u0001\u0000\u0000\u0000z|\u0005\u0004\u0000\u0000"+
		"{}\u0003*\u0015\u0000|{\u0001\u0000\u0000\u0000|}\u0001\u0000\u0000\u0000"+
		"}~\u0001\u0000\u0000\u0000~\u0092\u0003\u0004\u0002\u0000\u007f\u0080"+
		"\u00059\u0000\u0000\u0080\u0082\u0005\u0003\u0000\u0000\u0081\u0083\u0003"+
		".\u0017\u0000\u0082\u0081\u0001\u0000\u0000\u0000\u0082\u0083\u0001\u0000"+
		"\u0000\u0000\u0083\u0084\u0001\u0000\u0000\u0000\u0084\u0092\u0005\u0004"+
		"\u0000\u0000\u0085\u008a\u00059\u0000\u0000\u0086\u0087\u0005\u0015\u0000"+
		"\u0000\u0087\u0088\u0003\u0012\t\u0000\u0088\u0089\u0005\u0016\u0000\u0000"+
		"\u0089\u008b\u0001\u0000\u0000\u0000\u008a\u0086\u0001\u0000\u0000\u0000"+
		"\u008b\u008c\u0001\u0000\u0000\u0000\u008c\u008a\u0001\u0000\u0000\u0000"+
		"\u008c\u008d\u0001\u0000\u0000\u0000\u008d\u008e\u0001\u0000\u0000\u0000"+
		"\u008e\u008f\u0005\u0006\u0000\u0000\u008f\u0090\u0003\u0012\t\u0000\u0090"+
		"\u0092\u0001\u0000\u0000\u0000\u0091:\u0001\u0000\u0000\u0000\u0091@\u0001"+
		"\u0000\u0000\u0000\u0091J\u0001\u0000\u0000\u0000\u0091P\u0001\u0000\u0000"+
		"\u0000\u0091T\u0001\u0000\u0000\u0000\u0091W\u0001\u0000\u0000\u0000\u0091"+
		"Y\u0001\u0000\u0000\u0000\u0091_\u0001\u0000\u0000\u0000\u0091g\u0001"+
		"\u0000\u0000\u0000\u0091k\u0001\u0000\u0000\u0000\u0091m\u0001\u0000\u0000"+
		"\u0000\u0091n\u0001\u0000\u0000\u0000\u0091o\u0001\u0000\u0000\u0000\u0091"+
		"p\u0001\u0000\u0000\u0000\u0091t\u0001\u0000\u0000\u0000\u0091\u007f\u0001"+
		"\u0000\u0000\u0000\u0091\u0085\u0001\u0000\u0000\u0000\u0092\u0003\u0001"+
		"\u0000\u0000\u0000\u0093\u0097\u0005\u0017\u0000\u0000\u0094\u0096\u0003"+
		"\u0002\u0001\u0000\u0095\u0094\u0001\u0000\u0000\u0000\u0096\u0099\u0001"+
		"\u0000\u0000\u0000\u0097\u0095\u0001\u0000\u0000\u0000\u0097\u0098\u0001"+
		"\u0000\u0000\u0000\u0098\u009a\u0001\u0000\u0000\u0000\u0099\u0097\u0001"+
		"\u0000\u0000\u0000\u009a\u009b\u0005\u0018\u0000\u0000\u009b\u0005\u0001"+
		"\u0000\u0000\u0000\u009c\u009d\u0005\u0019\u0000\u0000\u009d\u009e\u0003"+
		"\u0004\u0002\u0000\u009e\u0007\u0001\u0000\u0000\u0000\u009f\u00a0\u0005"+
		"\u001a\u0000\u0000\u00a0\u00a1\u0003\u0012\t\u0000\u00a1\u00a5\u0005\u0017"+
		"\u0000\u0000\u00a2\u00a4\u0003\n\u0005\u0000\u00a3\u00a2\u0001\u0000\u0000"+
		"\u0000\u00a4\u00a7\u0001\u0000\u0000\u0000\u00a5\u00a3\u0001\u0000\u0000"+
		"\u0000\u00a5\u00a6\u0001\u0000\u0000\u0000\u00a6\u00a9\u0001\u0000\u0000"+
		"\u0000\u00a7\u00a5\u0001\u0000\u0000\u0000\u00a8\u00aa\u0003\f\u0006\u0000"+
		"\u00a9\u00a8\u0001\u0000\u0000\u0000\u00a9\u00aa\u0001\u0000\u0000\u0000"+
		"\u00aa\u00ab\u0001\u0000\u0000\u0000\u00ab\u00ac\u0005\u0018\u0000\u0000"+
		"\u00ac\t\u0001\u0000\u0000\u0000\u00ad\u00ae\u0005\u001b\u0000\u0000\u00ae"+
		"\u00af\u0003\u0012\t\u0000\u00af\u00b3\u0005\u001c\u0000\u0000\u00b0\u00b2"+
		"\u0003\u0002\u0001\u0000\u00b1\u00b0\u0001\u0000\u0000\u0000\u00b2\u00b5"+
		"\u0001\u0000\u0000\u0000\u00b3\u00b1\u0001\u0000\u0000\u0000\u00b3\u00b4"+
		"\u0001\u0000\u0000\u0000\u00b4\u000b\u0001\u0000\u0000\u0000\u00b5\u00b3"+
		"\u0001\u0000\u0000\u0000\u00b6\u00b7\u0005\u001d\u0000\u0000\u00b7\u00bb"+
		"\u0005\u001c\u0000\u0000\u00b8\u00ba\u0003\u0002\u0001\u0000\u00b9\u00b8"+
		"\u0001\u0000\u0000\u0000\u00ba\u00bd\u0001\u0000\u0000\u0000\u00bb\u00b9"+
		"\u0001\u0000\u0000\u0000\u00bb\u00bc\u0001\u0000\u0000\u0000\u00bc\r\u0001"+
		"\u0000\u0000\u0000\u00bd\u00bb\u0001\u0000\u0000\u0000\u00be\u00c8\u0005"+
		"\u001e\u0000\u0000\u00bf\u00c8\u0005\u001f\u0000\u0000\u00c0\u00c8\u0005"+
		" \u0000\u0000\u00c1\u00c8\u0005!\u0000\u0000\u00c2\u00c8\u0005\"\u0000"+
		"\u0000\u00c3\u00c4\u0005#\u0000\u0000\u00c4\u00c8\u0003\u000e\u0007\u0000"+
		"\u00c5\u00c6\u0005$\u0000\u0000\u00c6\u00c8\u0003\u000e\u0007\u0000\u00c7"+
		"\u00be\u0001\u0000\u0000\u0000\u00c7\u00bf\u0001\u0000\u0000\u0000\u00c7"+
		"\u00c0\u0001\u0000\u0000\u0000\u00c7\u00c1\u0001\u0000\u0000\u0000\u00c7"+
		"\u00c2\u0001\u0000\u0000\u0000\u00c7\u00c3\u0001\u0000\u0000\u0000\u00c7"+
		"\u00c5\u0001\u0000\u0000\u0000\u00c8\u000f\u0001\u0000\u0000\u0000\u00c9"+
		"\u00ca\u0005\u0015\u0000\u0000\u00ca\u00cb\u00058\u0000\u0000\u00cb\u00cd"+
		"\u0005\u0016\u0000\u0000\u00cc\u00c9\u0001\u0000\u0000\u0000\u00cd\u00ce"+
		"\u0001\u0000\u0000\u0000\u00ce\u00cc\u0001\u0000\u0000\u0000\u00ce\u00cf"+
		"\u0001\u0000\u0000\u0000\u00cf\u00d0\u0001\u0000\u0000\u0000\u00d0\u00d1"+
		"\u0003\u000e\u0007\u0000\u00d1\u0011\u0001\u0000\u0000\u0000\u00d2\u00d3"+
		"\u0003\u0014\n\u0000\u00d3\u0013\u0001\u0000\u0000\u0000\u00d4\u00d5\u0006"+
		"\n\uffff\uffff\u0000\u00d5\u00d6\u0003\u0016\u000b\u0000\u00d6\u00dc\u0001"+
		"\u0000\u0000\u0000\u00d7\u00d8\n\u0002\u0000\u0000\u00d8\u00d9\u0005%"+
		"\u0000\u0000\u00d9\u00db\u0003\u0016\u000b\u0000\u00da\u00d7\u0001\u0000"+
		"\u0000\u0000\u00db\u00de\u0001\u0000\u0000\u0000\u00dc\u00da\u0001\u0000"+
		"\u0000\u0000\u00dc\u00dd\u0001\u0000\u0000\u0000\u00dd\u0015\u0001\u0000"+
		"\u0000\u0000\u00de\u00dc\u0001\u0000\u0000\u0000\u00df\u00e0\u0006\u000b"+
		"\uffff\uffff\u0000\u00e0\u00e1\u0003\u0018\f\u0000\u00e1\u00e7\u0001\u0000"+
		"\u0000\u0000\u00e2\u00e3\n\u0002\u0000\u0000\u00e3\u00e4\u0005&\u0000"+
		"\u0000\u00e4\u00e6\u0003\u0018\f\u0000\u00e5\u00e2\u0001\u0000\u0000\u0000"+
		"\u00e6\u00e9\u0001\u0000\u0000\u0000\u00e7\u00e5\u0001\u0000\u0000\u0000"+
		"\u00e7\u00e8\u0001\u0000\u0000\u0000\u00e8\u0017\u0001\u0000\u0000\u0000"+
		"\u00e9\u00e7\u0001\u0000\u0000\u0000\u00ea\u00ed\u0003\u001a\r\u0000\u00eb"+
		"\u00ec\u0005\'\u0000\u0000\u00ec\u00ee\u0003\u001a\r\u0000\u00ed\u00eb"+
		"\u0001\u0000\u0000\u0000\u00ed\u00ee\u0001\u0000\u0000\u0000\u00ee\u0019"+
		"\u0001\u0000\u0000\u0000\u00ef\u00f2\u0003\u001c\u000e\u0000\u00f0\u00f1"+
		"\u0007\u0002\u0000\u0000\u00f1\u00f3\u0003\u001c\u000e\u0000\u00f2\u00f0"+
		"\u0001\u0000\u0000\u0000\u00f2\u00f3\u0001\u0000\u0000\u0000\u00f3\u001b"+
		"\u0001\u0000\u0000\u0000\u00f4\u00f5\u0006\u000e\uffff\uffff\u0000\u00f5"+
		"\u00f6\u0003\u001e\u000f\u0000\u00f6\u00fc\u0001\u0000\u0000\u0000\u00f7"+
		"\u00f8\n\u0002\u0000\u0000\u00f8\u00f9\u0007\u0003\u0000\u0000\u00f9\u00fb"+
		"\u0003\u001e\u000f\u0000\u00fa\u00f7\u0001\u0000\u0000\u0000\u00fb\u00fe"+
		"\u0001\u0000\u0000\u0000\u00fc\u00fa\u0001\u0000\u0000\u0000\u00fc\u00fd"+
		"\u0001\u0000\u0000\u0000\u00fd\u001d\u0001\u0000\u0000\u0000\u00fe\u00fc"+
		"\u0001\u0000\u0000\u0000\u00ff\u0100\u0006\u000f\uffff\uffff\u0000\u0100"+
		"\u0101\u0003 \u0010\u0000\u0101\u0107\u0001\u0000\u0000\u0000\u0102\u0103"+
		"\n\u0002\u0000\u0000\u0103\u0104\u0007\u0004\u0000\u0000\u0104\u0106\u0003"+
		" \u0010\u0000\u0105\u0102\u0001\u0000\u0000\u0000\u0106\u0109\u0001\u0000"+
		"\u0000\u0000\u0107\u0105\u0001\u0000\u0000\u0000\u0107\u0108\u0001\u0000"+
		"\u0000\u0000\u0108\u001f\u0001\u0000\u0000\u0000\u0109\u0107\u0001\u0000"+
		"\u0000\u0000\u010a\u0110\u0003$\u0012\u0000\u010b\u010c\u0005.\u0000\u0000"+
		"\u010c\u0110\u0003 \u0010\u0000\u010d\u010e\u00051\u0000\u0000\u010e\u0110"+
		"\u0003 \u0010\u0000\u010f\u010a\u0001\u0000\u0000\u0000\u010f\u010b\u0001"+
		"\u0000\u0000\u0000\u010f\u010d\u0001\u0000\u0000\u0000\u0110!\u0001\u0000"+
		"\u0000\u0000\u0111\u0112\u0005\u0017\u0000\u0000\u0112\u0117\u0003\u0012"+
		"\t\u0000\u0113\u0114\u00052\u0000\u0000\u0114\u0116\u0003\u0012\t\u0000"+
		"\u0115\u0113\u0001\u0000\u0000\u0000\u0116\u0119\u0001\u0000\u0000\u0000"+
		"\u0117\u0115\u0001\u0000\u0000\u0000\u0117\u0118\u0001\u0000\u0000\u0000"+
		"\u0118\u011a\u0001\u0000\u0000\u0000\u0119\u0117\u0001\u0000\u0000\u0000"+
		"\u011a\u011b\u0005\u0018\u0000\u0000\u011b#\u0001\u0000\u0000\u0000\u011c"+
		"\u011d\u0005\u0003\u0000\u0000\u011d\u011e\u0003\u0012\t\u0000\u011e\u011f"+
		"\u0005\u0004\u0000\u0000\u011f\u0176\u0001\u0000\u0000\u0000\u0120\u0176"+
		"\u00057\u0000\u0000\u0121\u0176\u00058\u0000\u0000\u0122\u0176\u0005="+
		"\u0000\u0000\u0123\u0176\u0005:\u0000\u0000\u0124\u0176\u00059\u0000\u0000"+
		"\u0125\u0176\u0007\u0005\u0000\u0000\u0126\u0176\u00055\u0000\u0000\u0127"+
		"\u0128\u00059\u0000\u0000\u0128\u012a\u0005\u0003\u0000\u0000\u0129\u012b"+
		"\u0003.\u0017\u0000\u012a\u0129\u0001\u0000\u0000\u0000\u012a\u012b\u0001"+
		"\u0000\u0000\u0000\u012b\u012c\u0001\u0000\u0000\u0000\u012c\u0176\u0005"+
		"\u0004\u0000\u0000\u012d\u012e\u0005\u0015\u0000\u0000\u012e\u0133\u0003"+
		"\u0012\t\u0000\u012f\u0130\u00052\u0000\u0000\u0130\u0132\u0003\u0012"+
		"\t\u0000\u0131\u012f\u0001\u0000\u0000\u0000\u0132\u0135\u0001\u0000\u0000"+
		"\u0000\u0133\u0131\u0001\u0000\u0000\u0000\u0133\u0134\u0001\u0000\u0000"+
		"\u0000\u0134\u0136\u0001\u0000\u0000\u0000\u0135\u0133\u0001\u0000\u0000"+
		"\u0000\u0136\u0137\u0005\u0016\u0000\u0000\u0137\u0176\u0001\u0000\u0000"+
		"\u0000\u0138\u0139\u00056\u0000\u0000\u0139\u0176\u00059\u0000\u0000\u013a"+
		"\u013b\u00056\u0000\u0000\u013b\u0140\u00059\u0000\u0000\u013c\u013d\u0005"+
		"\u0015\u0000\u0000\u013d\u013e\u0003\u0012\t\u0000\u013e\u013f\u0005\u0016"+
		"\u0000\u0000\u013f\u0141\u0001\u0000\u0000\u0000\u0140\u013c\u0001\u0000"+
		"\u0000\u0000\u0141\u0142\u0001\u0000\u0000\u0000\u0142\u0140\u0001\u0000"+
		"\u0000\u0000\u0142\u0143\u0001\u0000\u0000\u0000\u0143\u0176\u0001\u0000"+
		"\u0000\u0000\u0144\u0149\u00059\u0000\u0000\u0145\u0146\u0005\u0015\u0000"+
		"\u0000\u0146\u0147\u0003\u0012\t\u0000\u0147\u0148\u0005\u0016\u0000\u0000"+
		"\u0148\u014a\u0001\u0000\u0000\u0000\u0149\u0145\u0001\u0000\u0000\u0000"+
		"\u014a\u014b\u0001\u0000\u0000\u0000\u014b\u0149\u0001\u0000\u0000\u0000"+
		"\u014b\u014c\u0001\u0000\u0000\u0000\u014c\u0176\u0001\u0000\u0000\u0000"+
		"\u014d\u014e\u0005$\u0000\u0000\u014e\u014f\u0003\u000e\u0007\u0000\u014f"+
		"\u0150\u0005\u0017\u0000\u0000\u0150\u0155\u0003\u0012\t\u0000\u0151\u0152"+
		"\u00052\u0000\u0000\u0152\u0154\u0003\u0012\t\u0000\u0153\u0151\u0001"+
		"\u0000\u0000\u0000\u0154\u0157\u0001\u0000\u0000\u0000\u0155\u0153\u0001"+
		"\u0000\u0000\u0000\u0155\u0156\u0001\u0000\u0000\u0000\u0156\u0158\u0001"+
		"\u0000\u0000\u0000\u0157\u0155\u0001\u0000\u0000\u0000\u0158\u0159\u0005"+
		"\u0018\u0000\u0000\u0159\u0176\u0001\u0000\u0000\u0000\u015a\u015b\u0003"+
		"\u0010\b\u0000\u015b\u015c\u0005\u0017\u0000\u0000\u015c\u0161\u0003\u0012"+
		"\t\u0000\u015d\u015e\u00052\u0000\u0000\u015e\u0160\u0003\u0012\t\u0000"+
		"\u015f\u015d\u0001\u0000\u0000\u0000\u0160\u0163\u0001\u0000\u0000\u0000"+
		"\u0161\u015f\u0001\u0000\u0000\u0000\u0161\u0162\u0001\u0000\u0000\u0000"+
		"\u0162\u0164\u0001\u0000\u0000\u0000\u0163\u0161\u0001\u0000\u0000\u0000"+
		"\u0164\u0165\u0005\u0018\u0000\u0000\u0165\u0176\u0001\u0000\u0000\u0000"+
		"\u0166\u0167\u0003\u0010\b\u0000\u0167\u0168\u0005\u0017\u0000\u0000\u0168"+
		"\u016d\u0003\"\u0011\u0000\u0169\u016a\u00052\u0000\u0000\u016a\u016c"+
		"\u0003\"\u0011\u0000\u016b\u0169\u0001\u0000\u0000\u0000\u016c\u016f\u0001"+
		"\u0000\u0000\u0000\u016d\u016b\u0001\u0000\u0000\u0000\u016d\u016e\u0001"+
		"\u0000\u0000\u0000\u016e\u0171\u0001\u0000\u0000\u0000\u016f\u016d\u0001"+
		"\u0000\u0000\u0000\u0170\u0172\u00052\u0000\u0000\u0171\u0170\u0001\u0000"+
		"\u0000\u0000\u0171\u0172\u0001\u0000\u0000\u0000\u0172\u0173\u0001\u0000"+
		"\u0000\u0000\u0173\u0174\u0005\u0018\u0000\u0000\u0174\u0176\u0001\u0000"+
		"\u0000\u0000\u0175\u011c\u0001\u0000\u0000\u0000\u0175\u0120\u0001\u0000"+
		"\u0000\u0000\u0175\u0121\u0001\u0000\u0000\u0000\u0175\u0122\u0001\u0000"+
		"\u0000\u0000\u0175\u0123\u0001\u0000\u0000\u0000\u0175\u0124\u0001\u0000"+
		"\u0000\u0000\u0175\u0125\u0001\u0000\u0000\u0000\u0175\u0126\u0001\u0000"+
		"\u0000\u0000\u0175\u0127\u0001\u0000\u0000\u0000\u0175\u012d\u0001\u0000"+
		"\u0000\u0000\u0175\u0138\u0001\u0000\u0000\u0000\u0175\u013a\u0001\u0000"+
		"\u0000\u0000\u0175\u0144\u0001\u0000\u0000\u0000\u0175\u014d\u0001\u0000"+
		"\u0000\u0000\u0175\u015a\u0001\u0000\u0000\u0000\u0175\u0166\u0001\u0000"+
		"\u0000\u0000\u0176%\u0001\u0000\u0000\u0000\u0177\u017c\u0003(\u0014\u0000"+
		"\u0178\u0179\u00052\u0000\u0000\u0179\u017b\u0003(\u0014\u0000\u017a\u0178"+
		"\u0001\u0000\u0000\u0000\u017b\u017e\u0001\u0000\u0000\u0000\u017c\u017a"+
		"\u0001\u0000\u0000\u0000\u017c\u017d\u0001\u0000\u0000\u0000\u017d\'\u0001"+
		"\u0000\u0000\u0000\u017e\u017c\u0001\u0000\u0000\u0000\u017f\u0182\u0005"+
		"9\u0000\u0000\u0180\u0183\u0003\u0010\b\u0000\u0181\u0183\u0003\u000e"+
		"\u0007\u0000\u0182\u0180\u0001\u0000\u0000\u0000\u0182\u0181\u0001\u0000"+
		"\u0000\u0000\u0183)\u0001\u0000\u0000\u0000\u0184\u0192\u0003\u000e\u0007"+
		"\u0000\u0185\u0192\u0003\u0010\b\u0000\u0186\u0187\u0005\u0003\u0000\u0000"+
		"\u0187\u018c\u0003,\u0016\u0000\u0188\u0189\u00052\u0000\u0000\u0189\u018b"+
		"\u0003,\u0016\u0000\u018a\u0188\u0001\u0000\u0000\u0000\u018b\u018e\u0001"+
		"\u0000\u0000\u0000\u018c\u018a\u0001\u0000\u0000\u0000\u018c\u018d\u0001"+
		"\u0000\u0000\u0000\u018d\u018f\u0001\u0000\u0000\u0000\u018e\u018c\u0001"+
		"\u0000\u0000\u0000\u018f\u0190\u0005\u0004\u0000\u0000\u0190\u0192\u0001"+
		"\u0000\u0000\u0000\u0191\u0184\u0001\u0000\u0000\u0000\u0191\u0185\u0001"+
		"\u0000\u0000\u0000\u0191\u0186\u0001\u0000\u0000\u0000\u0192+\u0001\u0000"+
		"\u0000\u0000\u0193\u0196\u0003\u000e\u0007\u0000\u0194\u0196\u0003\u0010"+
		"\b\u0000\u0195\u0193\u0001\u0000\u0000\u0000\u0195\u0194\u0001\u0000\u0000"+
		"\u0000\u0196-\u0001\u0000\u0000\u0000\u0197\u019c\u0003\u0012\t\u0000"+
		"\u0198\u0199\u00052\u0000\u0000\u0199\u019b\u0003\u0012\t\u0000\u019a"+
		"\u0198\u0001\u0000\u0000\u0000\u019b\u019e\u0001\u0000\u0000\u0000\u019c"+
		"\u019a\u0001\u0000\u0000\u0000\u019c\u019d\u0001\u0000\u0000\u0000\u019d"+
		"/\u0001\u0000\u0000\u0000\u019e\u019c\u0001\u0000\u0000\u0000\u019f\u01a4"+
		"\u00059\u0000\u0000\u01a0\u01a1\u00052\u0000\u0000\u01a1\u01a3\u00059"+
		"\u0000\u0000\u01a2\u01a0\u0001\u0000\u0000\u0000\u01a3\u01a6\u0001\u0000"+
		"\u0000\u0000\u01a4\u01a2\u0001\u0000\u0000\u0000\u01a4\u01a5\u0001\u0000"+
		"\u0000\u0000\u01a51\u0001\u0000\u0000\u0000\u01a6\u01a4\u0001\u0000\u0000"+
		"\u0000*5=DH]rx|\u0082\u008c\u0091\u0097\u00a5\u00a9\u00b3\u00bb\u00c7"+
		"\u00ce\u00dc\u00e7\u00ed\u00f2\u00fc\u0107\u010f\u0117\u012a\u0133\u0142"+
		"\u014b\u0155\u0161\u016d\u0171\u0175\u017c\u0182\u018c\u0191\u0195\u019c"+
		"\u01a4";
	public static final ATN _ATN =
		new ATNDeserializer().deserialize(_serializedATN.toCharArray());
	static {
		_decisionToDFA = new DFA[_ATN.getNumberOfDecisions()];
		for (int i = 0; i < _ATN.getNumberOfDecisions(); i++) {
			_decisionToDFA[i] = new DFA(_ATN.getDecisionState(i), i);
		}
	}
}